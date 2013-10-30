<?php

namespace Lang\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;

class LangForm extends Form{
    
    /**
     * @var Select
     */
    public $select;
    /**
     * @var Request
     */
    public $request;
    
    public function __construct($lang = null) {
        parent::__construct('LangForm');
        
        $this->select = new Select('lang');
        $this->select->setValueOptions(array(
            'en_US' => 'English',
            'fr_FR' => 'French',
            'es_ES' => 'Spain',
        ));
        $this->select->setValue($lang);
        $this->select->setAttribute('id', 'lang');
        $this->select->setAttribute('onchange', 'document.LangForm.submit()');
        
        $this->add($this->select);
        
    }
    
    public function setLang($lang){
        $this->select->setValue($lang);
    }
}

?>
