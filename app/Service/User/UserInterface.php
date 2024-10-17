<?php
namespace app\Service\User;

interface UserInterface {
    public function getAllUsers();
    public function getUserById($id);
}
?>
