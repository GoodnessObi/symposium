<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-4">
                <x-back-btn :route="route('talks.index')" />
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ $talk->title }}
                </h2>
            </div>
            <a href="{{ route('talks.edit', ['talk' => $talk]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                Edit Talk
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>
                        <strong>Type:</strong> {{ $talk->type }}
                    </p>
                    <p>
                        <strong>Length:</strong> {{ $talk->length }}
                    </p>
                    <p>
                        <strong>Abstract:</strong> {{ $talk->abstract }}
                    </p>
                    <p>
                        <strong>Organizer Notes:</strong> {{ $talk->organizer_notes }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>