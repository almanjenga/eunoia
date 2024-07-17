<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmed</title>
</head>
<body>
    <p>Dear {{ $appointment->user->name }},</p>
    <p>Your appointment with {{ $appointment->professional->name }} on {{ $appointment->appointment_datetime }} has been confirmed.</p>
    <p>Thank you!</p>
</body>
</html>
