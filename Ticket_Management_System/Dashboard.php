<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Customer Dashboard</h2>

        <h3>Previous Bookings</h3>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>Departure Location</th>
                <th>Arrival Location</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($previousBookings as $booking): ?>
            <tr>
                <td><?= $booking['id']; ?></td>
                <td><?= $booking['departure_location']; ?></td>
                <td><?= $booking['arrival_location']; ?></td>
                <td><?= $booking['departure_date']; ?></td>
                <td><a href="#">View</a> | <a href="#">Cancel</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h3>Current Bookings</h3>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>Departure Location</th>
                <th>Arrival Location</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($currentBookings as $booking): ?>
            <tr>
                <td><?= $booking['id']; ?></td>
                <td><?= $booking['departure_location']; ?></td>
                <td><?= $booking['arrival_location']; ?></td>
                <td><?= $booking['departure_date']; ?></td>
                <td><a href="#">View</a> | <a href="#">Cancel</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h3>Bus Schedules</h3>
        <table>
            <tr>
                <th>Departure Location</th>
                <th>Arrival Location</th>
                <th>Date</th>
                <th>Ticket Price</th>
            </tr>
            <?php if (isset($schedules) && !empty($schedules)): ?>
                <?php foreach ($schedules as $schedule): ?>
                <tr>
                    <td><?= $schedule['departure_location']; ?></td>
                    <td><?= $schedule['arrival_location']; ?></td>
                    <td><?= $schedule['date']; ?></td>
                    <td><?= $schedule['ticket_price']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No schedules available.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>
