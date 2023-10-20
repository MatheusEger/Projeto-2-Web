<?php
class Funko {
    private $id, $img, $name, $desc, $price, $category;

    public function __construct($id, $img, $name, $desc, $price, $category) {
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->category = $category;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getID() {
        return $this->id;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getImg() {
        return $this->img;
    }
    
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getCategory() {
        return $this->category;
    }
}
?>