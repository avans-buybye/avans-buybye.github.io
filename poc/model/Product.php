<?php
class Product
{

    function __construct(?array $form)
    {
        if (!empty($form)) {
            foreach ($form as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    // unsure what this does
    function __construct(?array $data = null)
    {
        parent::__construct($data);
    }


    private $productId = Integer;
    private $companyId = Integer;
    private $productName = String;
    private $productPrice = Float;
    private $productLink = String;
    private $productImg = String;
    private $paymentLink = String;
    private $productStatus = Boolean;

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