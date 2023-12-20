<?php

namespace App\models;



class User{

    private $fullname;
    private $last_name;
    private $email;
    private $password;
    private $phone;
    private $budget;

    
    public function __construct($fullname, $last_name, $email, $password, $phone, $budget)
    {
        $this->fullname = $fullname;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->budget = $budget;
    }



   
    public function getName()
    {
        return $this->fullname;
    }

  
    public function setName($fullname)
    {
        $this->fullname = $fullname;
    }

    
    public function getLastname()
    {
        return $this->last_name;
    }

   
    public function setLastname($last_name)
    {
        $this->last_name = $last_name;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

  
    public function setEmail($email)
    {
        $this->email = $email;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

   
    public function getPhone()
    {
        return $this->phone;
    }

  
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    
    public function getBudget()
    {
        return $this->budget;
    }

   
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }




}