<?php
require_once '../../vendor/autoload.php';

use App\database\DbConfig;
use App\controllers\BookController;
use App\models\Book;

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: http://localhost/test/View/auth/login.php");
    exit;
}

$dbConnection = DbConfig;;
$bookModel = new Book($dbConnection);
$bookController = new BookController($bookModel);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLibra - Books</title>
    <link rel="icon" type="image/x-icon" href="../../public/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .book-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#">SmartLibra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h1 class="text-center mb-4">Library Book Catalog</h1>
    <div class="row">
        <?php foreach ($books as $book): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 book-card">
                    <img class="card-img-top" src="../../public/book<?php echo htmlspecialchars($book['id']); ?>.jpg" alt="<?php echo htmlspecialchars($book['title']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($book['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($book['description']); ?></p>
                        <p>Author: <?php echo htmlspecialchars($book['author']); ?></p>
                        <p>Genre: <?php echo htmlspecialchars($book['genre']); ?></p>
                    </div>
                    <div class="card-footer">
                        <button onclick="reserveBook(<?php echo htmlspecialchars($book['id']); ?>, this)" class="btn btn-primary">Reserve it</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($books)): ?>
            <div class="col">
                <p class="text-center">No books available at the moment.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Footer -->
<footer class="footer mt-5 bg-light">
    <div class="container text-center py-3">
        <span>&copy; SmartLibra 2023</span>
    </div>
</footer>

<script src="../../public/js/reserveBook.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
