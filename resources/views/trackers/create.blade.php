<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Tracker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Create Tracker</h3>
                    <button onclick="lookup()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Lookup My IP</button>
                    <div id="results"></div>
                    <br>
                    <form action="{{ route('trackers.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="user" class="block text-gray-700 text-sm font-bold mb-2">User:</label>
                                <input type="text" name="user" id="user" value="{{ Auth::user()->name }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" readonly>
                            </div>
                            <div>
                                <label for="date_time" class="block text-gray-700 text-sm font-bold mb-2">Date and Time:</label>
                                <input type="text" name="date_time" id="date_time" value="{{ now() }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" readonly>
                            </div>
                            <div>
                                <label for="ip_address" class="block text-gray-700 text-sm font-bold mb-2">IP Address:</label>
                                <input type="text" name="ip_address" id="ip_address" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" readonly>
                            </div>
                            <div>
                                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                                <input type="text" name="city" id="city" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country:</label>
                                <input type="text" name="country" id="country" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="countryCode" class="block text-gray-700 text-sm font-bold mb-2">Country Code:</label>
                                <input type="text" name="countryCode" id="countryCode" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="regionName" class="block text-gray-700 text-sm font-bold mb-2">Region Name:</label>
                                <input type="text" name="regionName" id="regionName" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="zip" class="block text-gray-700 text-sm font-bold mb-2">ZIP:</label>
                                <input type="text" name="zip" id="zip" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="lat" class="block text-gray-700 text-sm font-bold mb-2">Latitude:</label>
                                <input type="text" name="lat" id="lat" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="lon" class="block text-gray-700 text-sm font-bold mb-2">Longitude:</label>
                                <input type="text" name="lon" id="lon" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="timezone" class="block text-gray-700 text-sm font-bold mb-2">Timezone:</label>
                                <input type="text" name="timezone" id="timezone" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="isp" class="block text-gray-700 text-sm font-bold mb-2">ISP:</label>
                                <input type="text" name="isp" id="isp" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="org" class="block text-gray-700 text-sm font-bold mb-2">Organization:</label>
                                <input type="text" name="org" id="org" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="as" class="block text-gray-700 text-sm font-bold mb-2">AS:</label>
                                <input type="text" name="as" id="as" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                            <div>
                                <label for="browser" class="block text-gray-700 text-sm font-bold mb-2">Browser:</label>
                                <input type="text" name="browser" id="browser" value="{{ $_SERVER['HTTP_USER_AGENT'] }}" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" readonly>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function lookup() {
            $.getJSON('http://ip-api.com/json/', function(data) {
                $('#ip_address').val(data.query);
                $('#city').val(data.city);
                $('#country').val(data.country);
                $('#countryCode').val(data.countryCode);
                $('#regionName').val(data.regionName);
                $('#zip').val(data.zip);
                $('#lat').val(data.lat);
                $('#lon').val(data.lon);
                $('#timezone').val(data.timezone);
                $('#isp').val(data.isp);
                $('#org').val(data.org);
                $('#as').val(data.as);
            });
        }
    </script>
</x-app-layout>
