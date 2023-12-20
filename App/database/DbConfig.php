<?php

namespace App\database;


use PDO;
use PDOException;

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');

$dotenv->load();

class DbConfig
{

    private $username;
    private $password;
    private $dbname;
    private $servername;
    private $db;


    public function __construct(){

        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->dbname = $_ENV["DB_NAME"];
        $this->servername = $_ENV["DB_HOST"];
    }


    public  function getConnection()
    {
       try{
           $this->db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
           return $this->db;
       }catch(PDOException $e){
           echo $e->getMessage();
       }
       
    }
    
    public function isConnected()
    {
        return $this->db !== null;
    }
    


}


// $connection = new DbConfig();
// $conn = $connection->getConnection();

// if ($connection->isConnected()) {
//     echo "Database connected successfully!";
// } else {
//     echo "Failed to connect to the database.";
// }