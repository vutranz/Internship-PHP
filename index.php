<?php

    require_once './vendor/smarty/smarty/libs/Smarty.class.php';
    require_once 'E:/xampp/htdocs/MySmarty/app/Controllers/UserController.php';

    use Smarty\Smarty;
    use app\Controllers\UserController;

    $smarty = new Smarty();

    $userController = new UserController();
    $userController->displayUsers();
     
?>






