<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between">
        <div class="w-1/5">
            <!-- Sidebar -->
            <x-layout.sidebar-nav />
        </div>
        <div class="w-4/5">
            <!-- Main Content -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>