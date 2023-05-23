<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Trackers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if (session('success'))
                        <div class="bg-green-200 text-green-800 px-4 py-2 rounded-md mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-200 text-red-800 px-4 py-2 rounded-md mb-4">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Trackers</h3>
                        <a href="{{ route('trackers.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Create Tracker</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date and Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timezone</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($trackers as $tracker)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->date_time }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->ip_address }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->city }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->country }}, {{ $tracker->countryCode }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $tracker->timezone }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('trackers.show', $tracker) }}" class="text-blue-500 hover:text-blue-600">View</a>
                                        <a href="{{ route('trackers.edit', $tracker) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                                        <form action="{{ route('trackers.destroy', $tracker) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
