<?php

namespace app\connection;

use PDO;
use Dotenv\Dotenv;
require_once __DIR__.'/../vendor/autoload.php';


$dotenv =Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

class Connection
{

    public static function connection()
    {
        return  new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    }

}

$data= new connection();

// var_dump($data->connection());

if ($data->connection()) {
   echo 'Connection';
}