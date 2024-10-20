<?php
    namespace app\Controllers;

    // require_once 'E:/xampp/htdocs/MySmarty/vendor/smarty/smarty/libs/Smarty.class.php';
    // use Smarty\Smarty;

    require_once 'E:/xampp/htdocs/MySmarty/app/Service/Book/BookService.php';
    require_once 'E:/xampp/htdocs/MySmarty/configs/SmartyConfig.php';

    
    use app\Service\Book\BookService;
    use configs\SmartyConfig;

class BookController {
    private $bookService;
    private $smarty;

    public function __construct() {
        $this->smarty = SmartyConfig::getSmarty();
        $this->bookService = new BookService();
    }

    public function showbooks() {
        $books = $this->bookService->getAllBooks();
        $this->smarty->assign('books', $books);
        $this->smarty->display('book.tpl');
        
       
    }

    // public function FormAddBook() {
    //     if ($_SERVER['REQUEST_URI'] === '/FormAddBook.tpl') {
            
    //         $this->smarty->display('FormAddBook.tpl');
    //     }
    // }

    

}
?>