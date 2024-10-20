<?php

namespace app\Models;

class Category {
    private $id;
    private $name;

    // Constructor
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
?>
