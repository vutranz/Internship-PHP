<?php
    //vendor\smarty\smarty\libs\Smarty.class.php
    require_once './vendor/smarty/smarty/libs/Smarty.class.php';

    $smarty = new Smarty();

    $smarty->setTemplateDir('./templates/');


    $smarty->assign('name', 'World');

    $smarty->display('index.tpl'); 
?>






