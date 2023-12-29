<?php

namespace App\models;

use PDO;
use PDOException;

class Reservation
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createReservation($reservation)
    {
        try {
            
            $query = "INSERT INTO reservation (book_id, user_id, description, reservation_date, return_date, is_returned)
                      VALUES (:book_id, :user_id, :description, :reservation_date, :return_date, :is_returned)";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':book_id', $reservation['book_id'], PDO::PARAM_INT);
            $stmt->bindParam(':user_id', $reservation['user_id'], PDO::PARAM_INT);
            $stmt->bindParam(':description', $reservation['description'], PDO::PARAM_STR);
            $stmt->bindParam(':reserv_date', $reservation['reservationation_date'], PDO::PARAM_STR);
            $stmt->bindParam(':return_date', $reservation['return_date'], PDO::PARAM_STR);
            $stmt->bindParam(':is_returned', $reservation['is_returned'], PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            
            return false;
        }
    }

    
}
