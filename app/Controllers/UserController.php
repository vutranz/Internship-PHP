<?php
    namespace app\Controllers;

    //require_once 'E:/xampp/htdocs/MySmarty/vendor/smarty/smarty/libs/Smarty.class.php';
    //use Smarty\Smarty;

    require_once 'E:/xampp/htdocs/MySmarty/app/Service/User/UserService.php';
    require_once 'E:/xampp/htdocs/MySmarty/configs/SmartyConfig.php';

    
    use app\Service\User\UserService;
    use configs\SmartyConfig;

class UserController {
    private $userService;
    private $smarty;

    public function __construct() {
        $this->smarty = SmartyConfig::getSmarty();
        $this->userService = new UserService();
    }

    public function displayUsers() {
        $users = $this->userService->getAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('index.tpl');
    }

}
?>
