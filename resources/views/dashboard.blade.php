<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-layout.dashboard-page-layout>
        <div class="p-3 sm:px-14 bg-white border-b border-gray-200 h-96">
            This is the dashboard content.
        </div>
    </x-layout.dashboard-page-layout>
    </div>
</x-app-layout>
