<?php

namespace app\Service\User;

require_once 'E:/xampp/htdocs/MySmarty/configs/ConnectionDB.php';  
require_once 'E:/xampp/htdocs/MySmarty/app/Service/User/UserInterface.php';
require_once 'E:/xampp/htdocs/MySmarty/app/Models/User.php';

use app\Service\User\UserInterface;
use configs\ConnectionDB;
use app\Models\User;

class UserService implements UserInterface {
    private $connection;


    public function __construct() {
        $dbConnection = new ConnectionDB();
        $this->connection = $dbConnection->getConnection();
    }
    
    public function getAllUsers() {
        $query = "SELECT * FROM user"; 
        $stmt = $this->connection->prepare($query); 
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new User($row['id'], $row['name'], $row['gender'], $row['classification']);

            
        }

        return $users; 
    }

    public function getUserById($id){
        return null; //
    }
}
?>
