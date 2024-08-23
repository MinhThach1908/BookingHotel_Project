<!DOCTYPE html>
<html>
<head>
    <title>Your Booking Confirmation</title>
</head>
<body>
<p>Dear {{ $booking->customer->full_name }},</p>

<p>Thank you for booking with us!</p>

<p>We are pleased to confirm your reservation as follows:</p>
<ul>
    <li><strong>CheckIn Date:</strong> {{ $booking->checkin_date }}</li>
    <li><strong>CheckOut Date:</strong> {{ $booking->checkout_date }}</li>
    <li><strong>Room Type:</strong> {{ $booking->room->roomtype->title }}</li>
    <li><strong>Total Adults:</strong> {{ $booking->total_adults }}</li>
    <li><strong>Total Children:</strong> {{ $booking->total_children }}</li>
    <li><strong>Total Prices:</strong> {{ $booking->room->roomtype->price }}</li>
</ul>

<p>Please review the details above and let us know if any adjustments are needed. If you have any questions or require further assistance, feel free to reach out to us at Keto Hotel Website.</p>

<p>We look forward to welcoming you and ensuring you have a wonderful experience!</p>

<p>Best regards,<br>
    Keto Hotel!</p>
</body>
</html>
