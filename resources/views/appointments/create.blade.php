<!-- resources/views/appointments/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mental Health Professionals
        </h2>
    </x-slot>
<!-- <div class="container mt-5">
    <h2>Book an Appointment with {{ $professional->name }}</h2>
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="professional_id" value="{{ $professional->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="form-group">
            <label for="appointment_date">Appointment Date</label>
            <input type="date" name="appointment_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes (optional)</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking Simulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 1px solid #000;
            background-color: #f1f1f1;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .confirmation {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #28a745;
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>
    <h1>Appointment Booking Simulation</h1>
    <div class="container">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="date">Preferred Date</label>
            <input type="date" id="date">
        </div>
        <div class="form-group">
            <label for="time">Preferred Time</label>
            <input type="time" id="time">
        </div>
        <div class="form-group">
            <label for="professional">Choose a Professional</label>
            <select id="professional">
                <option value="Dr. Smith">Dr. Smith</option>
                <option value="Dr. Johnson">Dr. Johnson</option>
                <option value="Dr. Brown">Dr. Brown</option>
            </select>
        </div>
        <div class="form-group">
            <button onclick="bookAppointment()">Book Appointment</button>
        </div>
        <div class="confirmation" id="confirmation">
            Your appointment has been booked!
        </div>
    </div>

    <script>
        function bookAppointment() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const professional = document.getElementById('professional').value;

            if (name && email && date && time && professional) {
                document.getElementById('confirmation').style.display = 'block';
            } else {
                alert('Please fill in all fields');
            }
        }
    </script>
</body>
</html>

</x-app-layout>
