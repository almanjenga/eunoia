<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Available Mental Health Professionals
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold">View Your Appointments</h3>
                                <p class="text-sm text-gray-600 mt-2"></p>
                                <a href="{{ route('appointments.index') }}" class="block mt-2 text-sm text-blue-600">View</a>
                            </div>
                        @foreach ($professionals as $professional)
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold">{{ $professional->name }}</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $professional->specialization }}</p>
                                <a href="{{ route('professional.show', $professional->id) }}" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        @endforeach

                        @php
                            $placeholders = [
                                ['name' => 'Jane Sylvia', 'specialization' => 'Psychologist'],
                                ['name' => 'John Smith', 'specialization' => 'Therapist'],
                                ['name' => 'Emily Brown', 'specialization' => 'Counselor'],
                                
                
                            ];
                        @endphp

                        @foreach ($placeholders as $placeholder)
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold">{{ $placeholder['name'] }}</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $placeholder['specialization'] }}</p>
                                <a href="#" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
