<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Anxiety
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="container mx-auto px-4">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold"></h3>
                        <p class="text-sm text-gray-600 mt-2">anxious</p>
                    </div>

                    <!-- <div class="mb-4">
                        <h3 class="text-lg font-semibold">Messages</h3>
                        <div class="bg-gray-200 p-4 rounded-lg">
                            @foreach ($messages as $message)
                                <div class="mb-2">
                                    <strong>{{ $message->user->name }}:</strong>
                                    <p class="text-sm text-gray-600">{{ $message->message }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div> -->

                    <form action="{{ route('messages.store', $chatRoom) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <textarea name="message" placeholder="Type your message" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
