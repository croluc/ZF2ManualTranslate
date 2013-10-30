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
        parent::__construct('lang');
        
        $this->select = new Select('lang');
        $this->select->setValueOptions(array(
            'en_US' => 'English',
            'fr_FR' => 'French',
        ));
        $this->select->setValue($lang);
        
        $this->add($this->select);
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
    
    public function setLang($lang){
        $this->select->setValue($lang);
    }
}

?>
