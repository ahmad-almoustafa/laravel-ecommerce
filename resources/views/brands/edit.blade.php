<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Brand') }}
        </h2>
    </x-slot>

    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="w-1/3 bg-gray-100 p-4">
            <x-layout.sidebar-nav />
        </div>
        <!-- Main Area -->
        <div class="w-2/3 p-4  ">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('brands.update', $brand->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Brand Name Input -->
                            <div class="mt-8">
                                <label for="name"
                                    class="block font-medium text-sm text-gray-700">{{ __('Brand Name') }}</label>
                                <input id="name" class="block mt-1 w-full" type="text" name="name"
                                    value="{{ old('name', $brand->name) }}" required autofocus />
                                @if ($errors->has('name'))
                                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <!-- Brand Logo Input -->
                            <div class="mt-8">
                                <label for="logo"
                                    class="block font-medium text-sm text-gray-700">{{ __('Brand Logo') }}</label>
                                <input id="logo" class="block mt-1 w-full" type="file" name="logo" />
                                @if ($errors->has('logo'))
                                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('logo') }}</p>
                                @endif
                                <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }} logo"
                                    class="brand-logo mt-2" />
                            </div>
                            <!-- Submit Button -->
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded ml-4">{{ __('Update') }}</button>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
