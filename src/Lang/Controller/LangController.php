<?php

namespace Lang\Controller;

use Lang\Model\LangSession;
use Zend\Http\Request;

class LangController{
    
    public function __construct($translator,Request $request) {
        
        $session = new LangSession();
        if($request->isPost()&&$request->getPost()->get('lang')!=""){
            
            $lang = $request->getPost()->get('lang');
            $translator->setLocale($request->getPost()->get('lang'));
            $session->storage->setMetadata('lang', $lang);
        }else{
            $lang = $session->storage->getMetadata('lang');
            if($lang){
                $translator->setLocale($lang);
            }else{
                $lang = 'en_US';
                $session->storage->setMetadata('lang',$lang);
            }
        }
    }
}

?>
