<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tracker Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Tracker Details</h3>
                    <div>
                        <p><span class="font-semibold">Date and Time:</span> {{ $tracker->date_time }}</p>
                        <p><span class="font-semibold">User:</span> {{ $tracker->user->name }}</p>
                        <p><span class="font-semibold">IP Address:</span> {{ $tracker->ip_address }}</p>
                        <p><span class="font-semibold">City:</span> {{ $tracker->city }}</p>
                        <p><span class="font-semibold">Country Code:</span> {{ $tracker->countryCode }}</p>
                        <p><span class="font-semibold">Region Name:</span> {{ $tracker->regionName }}</p>
                        <p><span class="font-semibold">ZIP:</span> {{ $tracker->zip }}</p>
                        <p><span class="font-semibold">Latitude:</span> {{ $tracker->lat }}</p>
                        <p><span class="font-semibold">Longitude:</span> {{ $tracker->lon }}</p>
                        <p><span class="font-semibold">Timezone:</span> {{ $tracker->timezone }}</p>
                        <p><span class="font-semibold">ISP:</span> {{ $tracker->isp }}</p>
                        <p><span class="font-semibold">Organization:</span> {{ $tracker->org }}</p>
                        <p><span class="font-semibold">AS:</span> {{ $tracker->as }}</p>
                        <p><span class="font-semibold">Browser:</span> {{ $tracker->browser }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
