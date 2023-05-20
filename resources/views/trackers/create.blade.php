<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Tracker Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Create Tracker Record</h3>
                    <form action="{{ route('trackers.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User:</label>
                            <select name="user_id" id="user_id" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="ip_address" class="block text-gray-700 text-sm font-bold mb-2">IP Address:</label>
                            <input type="text" name="ip_address" id="ip_address" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" name="location" id="location" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="browser_fingerprint" class="block text-gray-700 text-sm font-bold mb-2">Browser Fingerprint:</label>
                            <input type="text" name="browser_fingerprint" id="browser_fingerprint" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="device_type" class="block text-gray-700 text-sm font-bold mb-2">Device Type:</label>
                            <input type="text" name="device_type" id="device_type" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="operating_system" class="block text-gray-700 text-sm font-bold mb-2">Operating System:</label>
                            <input type="text" name="operating_system" id="operating_system" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="network_ip_address" class="block text-gray-700 text-sm font-bold mb-2">Network IP Address:</label>
                            <input type="text" name="network_ip_address" id="network_ip_address" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="network_location" class="block text-gray-700 text-sm font-bold mb-2">Network Location:</label>
                            <input type="text" name="network_location" id="network_location" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="network_type" class="block text-gray-700 text-sm font-bold mb-2">Network Type:</label>
                            <input type="text" name="network_type" id="network_type" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="isp" class="block text-gray-700 text-sm font-bold mb-2">ISP:</label>
                            <input type="text" name="isp" id="isp" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Create Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
