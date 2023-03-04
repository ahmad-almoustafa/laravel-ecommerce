<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Brand') }}
        </h2>
    </x-slot>
    
    <x-layout.dashboard-page-layout>

        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <form method="POST" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Brand Name Input -->
                <div class="mt-8">
                    <x-forms.label for="name">{{ __('Brand Name') }}</x-forms.label>
                    <x-forms.input id="name" class="block mt-1 w-full" type="text" name="name"
                        value="{{ $brand->name }}" required autofocus />
                    <x-forms.validation-error name='name' />
                </div>
                <!-- Brand Logo Input -->
                <div class="mt-8">
                    <x-forms.label for="logo">{{ __('Brand Logo') }}</x-forms.label>
                    <x-forms.input id="logo" class="block mt-1 w-full" type="file" name="logo" />
                    <x-forms.validation-error name='logo' />
                    <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }} logo" class="brand-logo mt-2" />
                </div>
                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-forms.button type="submit" ><i class="fas fa-save mr-2"></i>{{ __('Update') }}</x-forms.button>
                </div>

            </form>
        </div>


    </x-layout.dashboard-page-layout>
</x-app-layout>
