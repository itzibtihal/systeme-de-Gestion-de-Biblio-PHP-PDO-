<?php

namespace Book;

use App\database\DbConfig;

use dao\DaoInterface;
use Connection;
use models\Book;
use models\User;

require_once __DIR__ . '/../../../vendor/autoload.php';
class BookController implements DaoInterface
{


    private $dbConnection;

    public function __construct()
    {
        
        $dbConfig = new DbConfig();
        $this->dbConnection = $dbConfig->getConnection();
    }

    public function save($Book)
    {

     $sql = ("INSERT INTO `book`(`title`, `author`, `genre`, `description`, `publication_year`, `total_copies`, `available_copies`) VALUES (:title,:author,:genre,:description,:publication_year,:total_copies,:available_copies)");

     $statement = $this->dbConnection->prepare($sql);

     $title = $Book->getTitle();
     $author = $Book->getAuthor();
     $genre = $Book->getGenre();
     $description = $Book->getDescription();
     $publication_year = $Book->getPublicationYear();
     $total_copies = $Book->getTotalCopies();
     $available_copies = $Book->getAvailableCopies();

     $statement->bindParam(':title', $title);
     $statement->bindParam(':author', $author);
     $statement->bindParam(':genre', $genre);
     $statement->bindParam(':description', $description);
     $statement->bindParam(':publication_year', $publication_year);
     $statement->bindParam(':total_copies', $total_copies);
     $statement->bindParam(':available_copies', $available_copies);
     $statement->execute();

    }

    public function update($book)
    {
        
    }

    public function findById($id)
    {
       
    }

    public function findAll()
    {
        
    }

    public function deleteById($id)
    {
        
    }

}









if(isset($_POST['submit'])) {
    $user = new Book(null,null,null,null,null,null,null);
    $user->setTitle($_POST['title']);
    $user->setAuthor($_POST['author']);
    $user->setGenre($_POST['genre']);
    $user->setDescription($_POST['description']);
    $user->setPublicationYear($_POST['publication_year']);
    $user->setTotalCopies($_POST['total_copies']);
    $user->setAvailableCopies($_POST['available_copies']);
    $bookimp = new BookController();
    $bookimp->save($user);
}