<?php 
interface ProductInterface{
    public function productList();
    public function productById();
    public function productDetails();
    public function producCategory();
}

class Product implements ProductInterface{
    public function productList(){
        echo "Product list interface\n";
    }
    public function productById(){
        echo "Product by ID\n";
    }
    public function productDetails(){
        echo "Product details\n";
    }
    public function producCategory(){
        echo "Product category list\n";
    }
}

$product = new Product();
$product->productList();