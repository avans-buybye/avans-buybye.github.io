<?php
class Product
{
    private $productId = Integer;
    private $companyId = Integer;
    private $productName = String;
    private $productPrice = Float;
    private $productLink = String;
    private $productImg = String;
    private $paymentLink = String;
    private $productStatus = Bolean;

    function getProductId()
    {
        return $this->productid;
    }

    function getCompanyId()
    {
        return $this->companyid;
    }

    function getProductName()
    {
        return $this->productName;
    }

    function getProductPrice()
    {
        return $this->productPrice;
    }

    function getProductLink()
    {
        return $this->productLink;
    }

    function getProductImg()
    {
        return $this->productImg;
    }

    function getPaymentLink()
    {
        return $this->paymentLink;
    }

    function getProductStatus()
    {
        return $this->productStatus;
    }
}



?>