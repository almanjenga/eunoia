<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Your Appointments
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    @if($appointments->isEmpty())
                        <p>No appointments booked yet.</p>
                    @else
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Professional</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Phone</th>
                                    <th class="px-4 py-2">Appointment Date</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $appointment->professional->name }}</td>
                                        <td class="border px-4 py-2">{{ $appointment->professional->email }}</td>
                                        <td class="border px-4 py-2">{{ $appointment->professional->phone }}</td>
                                        <td class="border px-4 py-2">{{ $appointment->appointment_datetime }}</td>
                                        <td class="border px-4 py-2">{{ ucfirst($appointment->status) }}</td>
                                        <td class="border px-4 py-2">
                                            @if ($appointment->status === 'confirmed')
                                                <span class="text-green-500">Confirmed</span>
                                            @elseif ($appointment->status === 'pending')
                                                
                                               
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
