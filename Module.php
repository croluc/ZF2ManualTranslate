<?php

namespace Lang;

class Module 
{
    public function onBootstrap(\Zend\Mvc\MvcEvent $e)
    {
        $translate = $e->getApplication()->getServiceManager()->get('translator');
        $request = $e->getRequest();
        new Controller\LangController($translate,$request);
                
    }
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }


}

?>
