<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Professional Profile
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <div class="flex items-center justify-center mt-6">
                        <div class="max-w-3xl w-full">
                            
                            <h3 class="text-lg font-semibold mb-4">Profile Information</h3>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <img src="{{ asset($professional->image) }}" alt="Profile Image" class="w-full mb-4 rounded-lg shadow-lg">
                                </div>
                                <div>
                                    <p><strong>Name:</strong> {{ $professional->name }}</p>
                                    <p><strong>Email:</strong> {{ $professional->email }}</p>
                                    <p><strong>Specialization:</strong> {{ $professional->specialization }}</p>
                                    <p><strong>Phone:</strong> {{ $professional->phone }}</p>
                                </div>
                            </div>

                            
                            <form action="{{ route('professional.profile.update', $professional->id) }}" method="POST" enctype="multipart/form-data" class="mt-6">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" id="name" name="name" value="{{ old('name', $professional->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email', $professional->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="specialization" class="block text-sm font-medium text-gray-700">Specialization</label>
                                    <input type="text" id="specialization" name="specialization" value="{{ old('specialization', $professional->specialization) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone', $professional->phone) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                                    <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    @if ($professional->image)
                                        <p class="text-sm text-gray-500 mt-2">Current Image: <img src="{{ asset($professional->image) }}" alt="Current Profile Image" class="w-16 h-16 inline-block rounded-full"></p>
                                    @endif
                                </div>
                                
                                <div class="mt-4">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
