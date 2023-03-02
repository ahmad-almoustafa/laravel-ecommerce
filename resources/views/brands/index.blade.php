<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Brand') }}
        </h2>
    </x-slot>



    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="w-1/3 bg-gray-100 p-4">
            <x-sidebar-nav />
        </div>
        <!-- Main Area -->
        <div class="w-2/3 p-4  ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-8 text-2xl">
                            Brands List
                        </div>

                        <div class="mt-6">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">#</th>
                                        <th class="border px-4 py-2">Name</th>
                                        <th class="border px-4 py-2  w-1/6">Logo</th>
                                        <th class="border px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                            <td class="border px-4 py-2">{{ $brand->name }}</td>
                                            <td><img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }} logo" class="max-w-xs brand-logo"></td>
                                            <td class="border px-4 py-2">
                                                <a href="{{ route('brands.edit', $brand->id) }}" class="ml-2 text-blue-600 hover:text-blue-900">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
