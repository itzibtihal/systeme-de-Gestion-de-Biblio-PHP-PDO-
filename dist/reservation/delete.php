<?php

use App\controllers\BookController;

require_once "../../app/controllers/Reservation/ReservationController.php";

$id = null;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$deletereservation = new ReservationController();

$deletereservation->deleteById($id);

?>