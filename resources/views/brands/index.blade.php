<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Brand') }}
            </h2>
            <a href="{{ route('brands.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fas fa-plus-circle mr-2"></i> Create Brand

            </a>

        </div>
    </x-slot>


    <x-layout.dashboard-page-layout>


        <div class="p-3 sm:px-14 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl border-b border-gray-400 pb-2">
                Brands List
            </div>

            <x-widgets.alert/>
            <div class="mt-6">
                <table class="table-auto w-full">
                    <x-widgets.table-header :columns="['#', 'Name', 'Logo', 'Actions']" />

                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $brand->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/brands/'.$brand->logo) }}" alt="{{ $brand->name }} logo" class="max-w-xs brand-logo">
                                </td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('brands.edit', $brand->id) }}" 
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-edit mr-2"></i> 
                                        Edit
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </x-layout.dashboard-page-layout>
</x-app-layout>
