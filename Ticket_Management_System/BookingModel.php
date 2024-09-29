<?php
class BookingModel {
    private $pdo;

    public function __construct() {
       
        $host = 'localhost';
        $db = 'ticket_management'; 
        $username = 'root';  
        $password = '';      

        try {
            
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    
    public function createBooking($departureLocation, $arrivalLocation, $departureDate, $numberOfTickets, $passengerName, $contactNumber) {
        $sql = "INSERT INTO bookings (departure_location, arrival_location, departure_date, number_of_tickets, passenger_name, contact_number) 
                VALUES (:departure_location, :arrival_location, :departure_date, :number_of_tickets, :passenger_name, :contact_number)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':departure_location' => $departureLocation,
            ':arrival_location' => $arrivalLocation,
            ':departure_date' => $departureDate,
            ':number_of_tickets' => $numberOfTickets,
            ':passenger_name' => $passengerName,
            ':contact_number' => $contactNumber
        ]);
    }

    
    public function getPreviousBookings() {
        $sql = "SELECT * FROM bookings"; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   
    public function getCurrentBookings() {
        $sql = "SELECT * FROM bookings"; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   
    public function getBusSchedules() {
        $sql = "SELECT * FROM bus_schedules"; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
