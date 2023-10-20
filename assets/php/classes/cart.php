<?php
class Cart {
    private $productID, $img, $productName, $qnt, $price;

    public function __construct($productID, $img, $productName, $qnt, $price) {
        $this->productID = $productID;
        $this->img = $img;
        $this->productName = $productName;
        $this->qnt = $qnt;
        $this->price = $price;
    }

    public function setProductID($productID) {
        $this->productID = $productID;
    }

    public function getProductID() {
        return $this->productID;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setQnt($qnt) {
        $this->qnt = $qnt;
    }

    public function getQnt() {
        return $this->qnt;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getImg() {
        return $this->img;
    }
}
?>