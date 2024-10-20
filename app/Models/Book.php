<?php

namespace app\Models;

require_once 'E:/xampp/htdocs/MySmarty/app/Models/Category.php';

use app\Models\Category;

class Book {
    private $id;
    private $title;
    private $author;
    private $isbn;
    private $published_year;
    private $price;
    private $number_of_pages;
    private Category $category; // Đối tượng Category
    private $images = []; // Mảng chứa các hình ảnh

    // Constructor
    public function __construct($id, $title, $author, $isbn, $published_year, $price, $number_of_pages, Category $category, $images) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->published_year = $published_year;
        $this->price = $price;
        $this->number_of_pages = $number_of_pages;
        $this->category = $category; // Thiết lập category
        $this->images = $images; // Thiết lập mảng hình ảnh
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getPublishedYear() {
        return $this->published_year;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getNumberOfPages() {
        return $this->number_of_pages;
    }

    public function getCategory() {
        return $this->category; // Trả về đối tượng Category
    }

    public function getImages() {
        return $this->images; // Trả về mảng hình ảnh
    }

    public function addImage($image) {
        $this->images[] = $image; // Thêm hình ảnh vào mảng
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function setPublishedYear($published_year) {
        $this->published_year = $published_year;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setNumberOfPages($number_of_pages) {
        $this->number_of_pages = $number_of_pages;
    }

    public function setCategory(Category $category) {
        $this->category = $category; // Cập nhật đối tượng Category
    }

    
}
?>
