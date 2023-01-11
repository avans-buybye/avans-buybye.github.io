<?php

class ProductController(){

    // construct runs as soon as class active
    function __construct() {

        parent::__construct('Product');
    }  
    // create a product model Object
    $product = new Product;
    // core function of adding 
    function addProduct(Product $product){
        $sql = 'INSERT INTO `TM1_Product` '
        . ' (name, price, imglink, status)'
        . ' VALUES (?, ?, ?, ?)';
        $args = [
            // $product->getProductId(),
            // $product->getCompanyId(),
            $product->getProductName(),
            $product->getProductPrice(),
            $product->getProductImg(),
            $product->getProductStatus(),
        ];
        $this->execute($sql, $args);
    }
    // redirect to productview(refresh page)
    return RedirectToAction("../view/ProductView.php", model);
    
}