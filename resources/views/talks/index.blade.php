<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('My Talks') }}
            </h2>
            <a href="{{ route('talks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                {{ __('Create Talk') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($talks as $talk)
                            <li class="mb-2 hover:bg-gray-100 p-2 rounded-md flex justify-between items-center group">
                                <a href="{{ route('talks.show', $talk) }}">
                                    {{ $talk->title }}
                                </a>


                                <span class="flex items-center gap-2 hidden group-hover:flex">
                                        <a href="{{ route('talks.edit', ['talk' => $talk]) }}" class="text-sm text-gray-500 transition-colors duration-300 hover:text-primary-500">
                                            Edit
                                        </a>
                                        <x-delete-item :route="route('talks.destroy', ['talk' => $talk])" :text="__('Delete')" />
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>