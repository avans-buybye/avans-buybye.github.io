<?php
class User 
{
    private $userId = Integer;
    private $firstName = String;
    private $lastName = String;
    private $emailAddress = String;
    private $password = String;
    private $phoneNumber = String;
}


function getUserId()
{
    return $this->userId;
}

function getFirstName()
{
    return $this->firstName;
}

function getLastName()
{
    return $this->lastName;
}

function getEmailAddress()
{
    return $this->emailAddress;
}

function getPassword()
{
    return $this->password;
}

function getPhoneNumber()
{
    return $this->phoneNumber;
}



?>