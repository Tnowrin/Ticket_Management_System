function validateForm() {
    const contactNumber = document.getElementById('contact_number').value;
    const numberOfTickets = document.getElementById('number_of_tickets').value;

    if (isNaN(contactNumber) || contactNumber.length < 10) {
        alert('Please enter a valid contact number.');
        return false;
    }

    if (isNaN(numberOfTickets) || numberOfTickets <= 0) {
        alert('Please enter a valid number of tickets.');
        return false;
    }

    return true;
}
