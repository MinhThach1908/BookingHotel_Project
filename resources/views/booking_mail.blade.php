<!DOCTYPE html>
<html>
<head>
    <title>Your Booking Confirmation</title>
</head>
<body>
<p>Dear {{ $bookingDetails['customer_name'] }},</p>

<p>Thank you for booking with us!</p>

<p>We are pleased to confirm your reservation as follows:</p>
<ul>
    <li><strong>Booking Reference:</strong> {{ $bookingDetails['reference'] }}</li>
    <li><strong>Date:</strong> {{ $bookingDetails['date'] }}</li>
    <li><strong>Time:</strong> {{ $bookingDetails['time'] }}</li>
    <li><strong>Location:</strong> {{ $bookingDetails['location'] }}</li>
    <li><strong>Number of Guests:</strong> {{ $bookingDetails['guests'] }}</li>
    <li><strong>Special Requests/Notes:</strong> {{ $bookingDetails['special_requests'] }}</li>
</ul>

<p>Please review the details above and let us know if any adjustments are needed. If you have any questions or require further assistance, feel free to reach out to us at {{ $bookingDetails['contact_info'] }}.</p>

<p>We look forward to welcoming you and ensuring you have a wonderful experience!</p>

<p>Best regards,<br>
    Keto Hotel!</p>
</body>
</html>
