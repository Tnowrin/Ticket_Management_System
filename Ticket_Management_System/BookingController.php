<?php
require_once 'BookingModel.php';

class BookingController {
    private $bookingModel;

    public function __construct() {
        $this->bookingModel = new BookingModel();
    }

    public function createBooking() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $departureLocation = $_POST['departure_location'];
            $arrivalLocation = $_POST['arrival_location'];
            $departureDate = $_POST['departure_date'];
            $numberOfTickets = $_POST['number_of_tickets'];
            $passengerName = $_POST['passenger'];
            $contactNumber = $_POST['contact_number'];

            if (empty($departureLocation) || empty($arrivalLocation) || empty($departureDate) || empty($numberOfTickets) || empty($passengerName) || empty($contactNumber)) {
                echo "All fields are required!";
                return;
            }

            $result = $this->bookingModel->createBooking($departureLocation, $arrivalLocation, $departureDate, $numberOfTickets, $passengerName, $contactNumber);

            if ($result) {
                
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                echo "Booking failed.";
            }
        }
    }

    public function showDashboard() {
        $previousBookings = $this->bookingModel->getPreviousBookings();
        $currentBookings = $this->bookingModel->getCurrentBookings();
        $schedules = $this->bookingModel->getBusSchedules(); 
        include 'Dashboard.php';
    }
    

    public function showBusSchedules() {
        $schedules = $this->bookingModel->getBusSchedules();
        include 'BusSchedules.php';
    }
}
