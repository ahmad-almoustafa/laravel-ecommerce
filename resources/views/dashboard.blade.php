<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="w-1/3 bg-gray-100 p-4">
            <x-sidebar-nav />
        </div>

        <!-- Main Area -->
        <div class="w-2/3 p-4  ">

            <h1>Main Area</h1>
            <p> {{ __("You're logged in!") }}</p>

        </div>
    </div>

</x-app-layout>
