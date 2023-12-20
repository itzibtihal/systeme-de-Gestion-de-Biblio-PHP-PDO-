<?php

namespace App\controllers;

use App\database\DbConfig;

require_once __DIR__ . '/../../../vendor/autoload.php';

class RegisterController
{
    private $database;

    public function __construct()
    {
        $dbconfig = new DbConfig();
        $this->database = $dbconfig->getConnection();
    }

    public function CreateAccount($fullname, $last_name, $email, $password, $phone)
    {
        $user_sql = ("INSERT INTO `user` (`fullname`, `last_name`, `email`, `password`, `phone`) 
                      VALUES (:fullname, :last_name, :email, :password, :phone)");

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $statement =  $this->database->prepare($user_sql);

        $statement->bindParam(':fullname', $fullname);
        $statement->bindParam(':last_name', $last_name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $hashedPassword);
        $statement->bindParam(':phone', $phone);
       

        if ($statement->execute()) {
            $LastInsertedId = $this->database->lastInsertId();
            $sql_user_role = ("INSERT INTO `UserRole` (`user_id`, `role_id`) VALUES (:user_id, 2)");
            $statement1 = $this->database->prepare($sql_user_role);

            if ($statement1) {
                $statement1->bindParam(':user_id', $LastInsertedId);
                $statement1->execute();
                $path = "../../../views/auth/Login.php";
                header("Location:".$path);
                exit();
            } else {
                echo "error in userrole ";
            }
        } else {
            echo "error in user";
        }
    }
}

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registerController = new RegisterController();
    $registerController->CreateAccount($fullname, $last_name, $email, $password, null);
}