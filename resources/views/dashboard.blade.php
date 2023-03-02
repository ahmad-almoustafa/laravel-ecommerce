<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <div class="w-1/4">
                <!-- Sidebar -->
                <x-layout.sidebar-nav />
            </div>
            <div class="w-3/4">
                <!-- Main Content -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <p>This is the dashboard content.</p>
                </div>
            </div>
    </div>
    </div>
</x-app-layout>
