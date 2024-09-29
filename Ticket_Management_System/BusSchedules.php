<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Schedules</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Bus Schedules</h2>
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
