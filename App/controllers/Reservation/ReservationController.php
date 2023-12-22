<?php

namespace App\controllers;

use App\models\Reservation;

class ReservationController
{
    private $reservationModel;

    public function __construct($reservationModel)
    {
        $this->reservationModel = $reservationModel;
    }

    public function reserveBook($bookId, $userId, $reservationDate, $returnDate)
    {
        
        $reservation = [
            'book_id' => $bookId,
            'user_id' => $userId,
            'description' => 'Reserved',
            'reservation_date' => $reservationDate,
            'return_date' => $returnDate,
            'is_returned' => 0,
        ];

        
        $success = $this->reservationModel->createReservation($reservation);

        return $success;
    }
}
