<?php
class Customer extends User
{
    private $customerId = Integer;
    private $userId = Integer;
    private $street = String;
    private $buildingNumber = String;
    private $zipCode = String;
    private $city = String;
}

function getCustomerId()
{
    return $this->customerId;
}

function getUserId()
{
    return $this->userId;
}

function getStreet()
{
    return $this->street;
}

function getBuildingNumber()
{
    return $this->buildingNumber;
}

function getZipCode()
{
    return $this->zipCode;
}

function getCity()
{
    return $this->city;
}

?>