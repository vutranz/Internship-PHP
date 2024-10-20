<?php

namespace app\Models;

class Image {
    private $id;
    private $book_id; // ID sách
    private $image_path;

    // Constructor
    public function __construct($id, $book_id, $image_path) {
        $this->id = $id;
        $this->book_id = $book_id;
        $this->image_path = $image_path;
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function getBookId() {
        return $this->book_id;
    }

    public function getImagePath() {
        return $this->image_path;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setBookId($book_id) {
        $this->book_id = $book_id;
    }

    public function setImagePath($image_path) {
        $this->image_path = $image_path;
    }
}
?>
