<?php
class Order 
{
    private $orderId = Integer;
    private $productId = Integer;
    private $customerId = Integer;
    private $orderDate = String;
    private $orderStatus = String;
}

function getOrderId()
{
    return $this->orderId;
}

function getProductId()
{
    return $this->productId;
}

function getCustomerId()
{
    return $this->customerId;
}

function getOrderDate()
{
    return $this->orderDate;
}

function getOrderStatus()
{
    return $this->orderstatus;
}


?>