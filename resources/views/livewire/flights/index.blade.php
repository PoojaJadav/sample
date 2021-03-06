<div>
    @include('flights.filters')

    <div class="mt-8 sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                <tr class="border-t border-gray-200">
                    <th wire:click="sortBy('title')" class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider flex">
                        <span class="lg:pl-2">
                        {{ __('Title') }}
                        </span> <x-wire-icons.sort/>
                    </th>
                    <th wire:click="sortBy('updated_at')" class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Last updated') }}
                    </th>
                    <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                @foreach($flights as $flight)
                    <tr>
                        <td class="px-6 py-3 max-w-0 w-2/4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                                <a href="{{ route('flights.show', $flight) }}" class="truncate hover:text-gray-600">
                                    {{ $flight->title }}
                                </a>
                            </div>
                        </td>
                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                            {{ $flight->updated_at->format('F d, Y') }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                         <span wire:click="$emit('Flights.Manage.edit', {{ $flight->id }})"
                                                          class="text-indigo-600 hover:text-indigo-900 cursor-pointer">Edit</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 px-8">
            {!! $flights->links() !!}
        </div>
    </div>
</div>
