<?php

namespace models;

use Connection;


class User{

    private $name;
    private $lastname;
    private $email;
    private $password;
    private $phone;
    private $budget;

    
    public function __construct($name, $lastname, $email, $password, $phone, $budget)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->budget = $budget;
    }



   
    public function getName()
    {
        return $this->name;
    }

   
    public function setName($name)
    {
        $this->name = $name;
    }

   
    public function getLastname()
    {
        return $this->lastname;
    }

    
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
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