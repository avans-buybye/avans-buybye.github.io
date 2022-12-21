<?php
class Company
{
    private $companyId = Integer;
    private $employees = Array;
    private $companyName = String;
    private $kvkNumber = String;
    private $btwNumber = String;
    private $street = String;
    private $buildingNumber = String;
    private $zipCode = String;
    private $city = String;
}

function getCompanyId()
{
    return $this->companyId;
}

function getEmployees()
{
    return $this->employees;
}

function getCompanyName()
{
    return $this->companyName;
}

function getKvkNumber()
{
    return $this->kvkNumber;
}

function getBtwNumber()
{
    return $this->btwNumber;
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
    return $this->zipcCode;
}

function getCity()
{
    return $this->city;
}

?>