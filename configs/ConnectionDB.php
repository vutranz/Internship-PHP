<?php

namespace configs;

use PDO;
use PDOException;

class ConnectionDB {
    private $host = 'localhost';  
    private $db_name = 'shopappphp';  
    private $username = 'root';  
    private $password = ''; 
    private $conn;

    // Kết nối đến database
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Đặt chế độ báo lỗi
            //echo "Kết nối thành công";  
        } catch (PDOException $exception) {
            echo "Lỗi kết nối: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

// // Tạo đối tượng ConnectionDB
// $database = new ConnectionDB();
// // Gọi phương thức getConnection để kiểm tra kết nối
// $conn = $database->getConnection();

?>
