<?php

namespace app\Service\Book;

require_once 'E:/xampp/htdocs/MySmarty/app/Models/Book.php';

use app\Models\Book;

interface BookInterface {
    public function getAllBooks();
    public function getBookById($id);
    public function addBook(Book $book); // Truyền đối tượng Book vào
    public function updateBook($id, Book $book); // Cập nhật với đối tượng Book
    public function deleteBook($id);
}
?>