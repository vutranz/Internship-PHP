<?php
    namespace app\Controllers;

    require_once 'E:/xampp/htdocs/MySmarty/vendor/smarty/smarty/libs/Smarty.class.php';
    require_once 'E:/xampp/htdocs/MySmarty/app/Service/User/UserService.php';

    use Smarty\Smarty;
    use app\Service\User\UserService;

class UserController {
    private $userService;
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('templates/');
        $this->smarty->setCompileDir('templates_c/');

        $this->userService = new UserService();
    }

    public function displayUsers() {
        $users = $this->userService->getAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('index.tpl');
    }

}
?>
