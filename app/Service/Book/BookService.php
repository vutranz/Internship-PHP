<?php 

namespace app\Service\Book;

$dir = 'E:/xampp/htdocs/MySmarty';
require_once 'E:/xampp/htdocs/MySmarty/app/Service/Book/BookInterface.php';
require_once 'E:/xampp/htdocs/MySmarty/configs/ConnectionDB.php';  
require_once 'E:/xampp/htdocs/MySmarty/app/Models/Book.php';
require_once 'E:/xampp/htdocs/MySmarty/app/Models/Category.php';

use app\Service\Book\BookInterface;
use configs\ConnectionDB;
use app\Models\Book;
use app\Models\Category;

class BookService implements BookInterface{
    private $connection;

    public function __construct() {
        $dbConnection = new ConnectionDB();
        $this->connection = $dbConnection->getConnection();
    }

    public function getAllBooks()
{
    $query = "SELECT b.*, c.id AS category_id, c.name AS category_name, bi.image_path 
              FROM book b 
              JOIN categories c ON b.categories_id = c.id 
              LEFT JOIN book_images bi ON b.id = bi.book_id"; 

    $stmt = $this->connection->prepare($query); 
    $stmt->execute();

    $books = [];
    $bookData = [];
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $category = new Category($row['category_id'], $row['category_name']); // Tạo đối tượng Category
        
        // Nếu book chưa có trong mảng, thêm nó vào mảng $bookData
        if (!isset($bookData[$row['id']])) {
            $bookData[$row['id']] = new Book(
                $row['id'], 
                $row['title'], 
                $row['author'], 
                $row['isbn'], 
                $row['published_year'], 
                $row['price'], 
                $row['number_of_pages'], 
                $category,
                [] // Khởi tạo mảng hình ảnh
            );
        }
        
        // Thêm hình ảnh vào đối tượng Book nếu có
        if ($row['image_path']) {
            $bookData[$row['id']]->addImage($row['image_path']);
        }
    }

    return array_values($bookData);
}



    public function getBookById($id)
    {
        return null;
    }

    public function addBook(Book $book){
        return null;
    }
    
    public function updateBook($id, Book $book){
        return null;
    }

    public function deleteBook($id){
        return null;
    }
}

?>