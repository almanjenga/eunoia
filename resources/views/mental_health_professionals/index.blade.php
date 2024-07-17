<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mental Health Professionals
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <!-- Search bar -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Search professionals..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="professionals">
                        @foreach($professionals as $professional)
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold">{{ $professional->name }}</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $professional->specialization }}</p>
                                <a href= "" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const professionalsContainer = document.getElementById('professionals').getElementsByClassName('rounded-lg');

            searchInput.addEventListener('input', function () {
                const searchValue = searchInput.value.toLowerCase().trim();

                Array.from(professionalsContainer).forEach(function (professional) {
                    const title = professional.querySelector('h3').textContent.toLowerCase();
                    const description = professional.querySelector('p').textContent.toLowerCase();
                    const shouldShow = title.includes(searchValue) || description.includes(searchValue);

                    if (shouldShow) {
                        professional.style.display = 'block';
                    } else {
                        professional.style.display = 'none';
                    }
                });
            });
        });
    </script>
</x-app-layout>
