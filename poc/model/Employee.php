<?php
class Employee extends User
{
    private $employeeId = Integer;
    private $userId = Integer;
    private $companyId = Integer;
}

function getEmployeeId()
{
    return $this->employeeId;
}

function getUserId()
{
    return $this->userId;
}

function getCompanyId()
{
    return $this->companyId;
}



?>