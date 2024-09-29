<?php
require_once 'BookingController.php';

$controller = new BookingController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'book') {
        $controller->createBooking();
    } elseif ($_GET['action'] == 'dashboard') {
        $controller->showDashboard();
    } elseif ($_GET['action'] == 'schedules') {
        $controller->showBusSchedules();
    }
} else {
    include 'BookingForm.php';
}
