<?php
namespace app\Models;

class User {
    private $id;
    private $name;
    private $gender;
    private $classification;

    // Constructor
    public function __construct($id, $name, $gender, $classification) {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->classification = $classification;
    }

    // Getter và Setter cho các thuộc tính
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
       return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getClassification() {
        return $this->classification;
    }

    public function setClassification($classification) {
        $this->classification = $classification;
    }

    public function __toString() {
        return "User [ID: $this->id, Name: $this->name, Gender: $this->gender, Classification: $this->classification]";
    }
    
}
?>
