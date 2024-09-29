<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Ticket</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="booking-style.css"> 
    <script src="validation.js"></script>
</head>
<body>
    <h2>Book a Ticket</h2>
    <div class="form-container">
        <form action="index.php?action=book" method="POST" onsubmit="return validateForm()">
            <label for="departure_location">Departure Location:</label>
            <input type="text" id="departure_location" name="departure_location" required>
            
            <label for="arrival_location">Arrival Location:</label>
            <input type="text" id="arrival_location" name="arrival_location" required>

            <label for="departure_date">Departure Date:</label>
            <input type="date" id="departure_date" name="departure_date" required>

            <label for="number_of_tickets">Number of Tickets:</label>
            <input type="number" id="number_of_tickets" name="number_of_tickets" required>

            <label for="passenger">Passenger Name:</label>
            <input type="text" id="passenger" name="passenger" required>

            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required>

            <button type="submit" name="book">Book Ticket</button>
        </form>
    </div>
</body>
</html>
