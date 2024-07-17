<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Professional Details - {{ $professional->name }}
        </h2>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div class="p-4 bg-gray-200 rounded-lg">
                        <h3 class="text-lg font-semibold">{{ $professional->name }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $professional->specialization }}</p>
                        <p class="text-sm text-gray-600 mt-2">Email: {{ $professional->email }}</p>
                        <p class="text-sm text-gray-600 mt-2">Phone: {{ $professional->phone }}</p>
                        <p>Call,Text or email {{ $professional->name }} for any help you might need or book an appointment below</p>

                        <form action="{{ route('appointments.book') }}" method="POST" id="bookAppointmentForm">
                            @csrf

                            <label for="professional_id">Select Professional:</label>
                            <select name="professional_id" id="professional_id">
                                @foreach ($professionals as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->name }} - {{ $prof->specialization }}</option>
                                @endforeach
                            </select>
                            <br>
                            <label for="appointment_date">Appointment Date:</label>
                            <input type="date" name="appointment_date" id="appointment_date" required min="{{ now()->toDateString() }}">
                            <br>
                            <label for="appointment_time">Appointment Time:</label>
                            <input type="time" name="appointment_time" id="appointment_time" required>
                            <br>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Book Appointment</button>
                            <a href="{{ route('appointments.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-4">View Appointments</a>
                        </form>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('bookAppointmentForm');
            form.addEventListener('submit', function(event) {
                // Validate appointment date
                const appointmentDate = new Date(document.getElementById('appointment_date').value);
                const now = new Date();
                now.setHours(0, 0, 0, 0); // Set current time to midnight for comparison

                if (appointmentDate < now) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please select a future date for your appointment.');
                }
            });
        });
    </script>
</x-app-layout>
