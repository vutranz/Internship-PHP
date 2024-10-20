<?php

    require_once './vendor/smarty/smarty/libs/Smarty.class.php';
    require_once 'E:/xampp/htdocs/MySmarty/app/Controllers/UserController.php';
    require_once 'E:/xampp/htdocs/MySmarty/app/Controllers/BookController.php';

    use Smarty\Smarty;
    use app\Controllers\UserController;
    use app\Controllers\BookController;

    $smarty = new Smarty();

    // $userController = new UserController();
    // $userController->displayUsers();

    $bookController = new BookController();

    $bookController->showbooks();
    //$bookController->showAddBookForm();

    
     
?>






