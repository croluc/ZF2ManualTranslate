<?php

namespace Lang\Model;

use Zend\Session\SessionManager;
use Zend\Session\Config\StandardConfig;
use Zend\Session\Storage;
class LangSession extends SessionManager{
    
    /**
     * @var Storage
     */
    public $storage;
    
    public function __construct() {
        
        $config = new StandardConfig();
        $config->setOptions(array(
            'remember_me_seconds' => 1,
            'name'                => 'zf2',
        ));
        $manager = new SessionManager($config);
        $manager->start();
        if(!$manager->sessionExists()){
            $manager->regenerateId();
        }
        $this->storage = $manager->getStorage();
    }
    
}

?>
