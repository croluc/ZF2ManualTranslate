ZF2ManualTranslate
==================

Add a combobox to the layout to chose the language. Based on translate class.

Module architecture : 
Lang
	config
		module.config.php
	src
		Lang
			Controller
				LangController.php
			Form
				LangForm.php
			Model
				LangSession.php
			ViewHelper
				DisplayLangForm.php
		Module.php
		autoload_classmap.php
		
		
To make this module work, edit the file config/application.config.php :
<?php
return array(
    'modules' => array(
        'Application',
        'Album',        
        'Lang',   # <-- add this line
    ),
  ...
  
To add the LangForm in the layout, edit ./module/Application/view/layout/layout.phtml
Add those lines : 
<?php

    $form = $this->displayLangForm();
    $form->prepare();
    echo $this->form()->openTag($form);
    echo $this->formCollection($form);
    echo $this->form()->closeTag();
?>

