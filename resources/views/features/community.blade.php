<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Community Chat Rooms
        </h2>
    </x-slot>
    <title>Chat Room</title>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <!-- Search bar -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Search chat rooms..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>


                    

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="chatRooms">
                        <!-- Example chat room cards -->
                        <div class="p-4 bg-gray-200 rounded-lg">
                             <h3 class="text-lg font-semibold">Anxiety Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room for anxiety-related support.</p>
                             <a href="{{ route('chatrooms.show', ['room' => 'anxiety-support']) }}" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>


                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Depression Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room for depression-related support.</p>
                            <a href="{{ route('chatrooms.show', ['room' => 'depression-support']) }}" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Stress Management</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room for stress management tips.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <!-- Add more chat rooms -->
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Relationship Advice</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room for relationship advice and support.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">PTSD Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room for PTSD-related support.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Substance Addiction Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join for support about substance addiction.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Gambling Addiction</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Insomnia</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">OCD</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Anorexia support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Bulmia Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold">Panic Disorder Support</h3>
                            <p class="text-sm text-gray-600 mt-2">Join this chat room to share self-care strategies.</p>
                            <a href="#" class="block mt-2 text-sm text-blue-600">Join Chat Room</a>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to handle search functionality
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const chatRoomsContainer = document.getElementById('chatRooms').getElementsByClassName('rounded-lg');

            searchInput.addEventListener('input', function () {
                const searchValue = searchInput.value.toLowerCase().trim();

                Array.from(chatRoomsContainer).forEach(function (chatRoom) {
                    const title = chatRoom.querySelector('h3').textContent.toLowerCase();
                    const description = chatRoom.querySelector('p').textContent.toLowerCase();
                    const shouldShow = title.includes(searchValue) || description.includes(searchValue);

                    if (shouldShow) {
                        chatRoom.style.display = 'block';
                    } else {
                        chatRoom.style.display = 'none';
                    }
                });
            });
        });
    </script>
</x-app-layout>
