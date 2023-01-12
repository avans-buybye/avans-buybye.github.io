<?php
require_once '../model/Product.php';

class ProductController{

    // construct runs as soon as class active
    function __construct() {

        // parent::__construct('Product');
        $product = new Product;
    }  
    // create a product model Object

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
        // redirect to productview(refresh page)
        return RedirectToAction("../view/ProductView.php", model);
    }

    // construct runs as soon as class active
    function viewProducts(Product $product) {
        $sql = self::$select;
        $sql .= " WHERE `TM1_Product`.`companyId` = ?";
        $sql .= " ORDER BY `TM1_Product`.`productId`";
        $this->startListSql($sql, [$productId]);
        return $this->getObjectSql($sql, [$productName, $productPrice, $productImg, $productStatus]);
    }  
    

}