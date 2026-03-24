<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
        <a href="{{ route('talks.index') }}" class="text-gray-500 transition-colors duration-300 hover:text-primary-500">
            &larr;
        </a>
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Talk') }}
        </h2>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="post" action="{{ route('talks.update', ['talk' => $talk]) }}">
                    @method('patch')
                    @include('talks.template')
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
