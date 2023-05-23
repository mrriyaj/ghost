<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Tracker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Edit Tracker</h3>
                    <form action="{{ route('trackers.update', $tracker->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="user" class="block text-gray-700 text-sm font-bold mb-2">User:</label>
                                <input type="text" name="user" id="user" value="{{ $tracker->user }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="date_time" class="block text-gray-700 text-sm font-bold mb-2">Date and Time:</label>
                                <input type="text" name="date_time" id="date_time" value="{{ $tracker->date_time }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="ip_address" class="block text-gray-700 text-sm font-bold mb-2">IP Address:</label>
                                <input type="text" name="ip_address" id="ip_address" value="{{ $tracker->ip_address }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                                <input type="text" name="city" id="city" value="{{ $tracker->city }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country:</label>
                                <input type="text" name="country" id="country" value="{{ $tracker->country }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="countryCode" class="block text-gray-700 text-sm font-bold mb-2">Country Code:</label>
                                <input type="text" name="countryCode" id="countryCode" value="{{ $tracker->countryCode }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="regionName" class="block text-gray-700 text-sm font-bold mb-2">Region Name:</label>
                                <input type="text" name="regionName" id="regionName" value="{{ $tracker->regionName }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="zip" class="block text-gray-700 text-sm font-bold mb-2">ZIP:</label>
                                <input type="text" name="zip" id="zip" value="{{ $tracker->zip }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="lat" class="block text-gray-700 text-sm font-bold mb-2">Latitude:</label>
                                <input type="text" name="lat" id="lat" value="{{ $tracker->lat }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="lon" class="block text-gray-700 text-sm font-bold mb-2">Longitude:</label>
                                <input type="text" name="lon" id="lon" value="{{ $tracker->lon }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="timezone" class="block text-gray-700 text-sm font-bold mb-2">Timezone:</label>
                                <input type="text" name="timezone" id="timezone" value="{{ $tracker->timezone }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="isp" class="block text-gray-700 text-sm font-bold mb-2">ISP:</label>
                                <input type="text" name="isp" id="isp" value="{{ $tracker->isp }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="org" class="block text-gray-700 text-sm font-bold mb-2">Organization:</label>
                                <input type="text" name="org" id="org" value="{{ $tracker->org }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="as" class="block text-gray-700 text-sm font-bold mb-2">AS:</label>
                                <input type="text" name="as" id="as" value="{{ $tracker->as }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="browser" class="block text-gray-700 text-sm font-bold mb-2">Browser:</label>
                                <input type="text" name="browser" id="browser" value="{{ $tracker->browser }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" readonly>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Update</button>
                            <a href="{{ route('trackers.index') }}" class="ml-4 inline-block bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-md">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
