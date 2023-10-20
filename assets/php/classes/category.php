<?php
class Category {
    private $name, $img, $desc;

    public function __construct($name, $img, $desc) {
        $this->name = $name;
        $this->img = $img;
        $this->desc = $desc;
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

    public function setImg($img) {
        $this->img = $img;
    }

    public function getImg() {
        return $this->img;
    }
}
?>