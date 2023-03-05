<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Brand') }}
        </h2>
    </x-slot>
    
    <x-layout.dashboard-page-layout>

        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Brand Name Input -->
                <div class="mt-8">
                    <x-forms.label for="name">{{ __('Brand Name') }}</x-forms.label>
                    <x-forms.input id="name" class="block mt-1 w-full" type="text" name="name"
                         value="{{ old('name') }}"  required autofocus />
                        
                    <x-forms.validation-error name='name' />
                </div>
                <!-- Brand description -->
                <div class="mt-8">
                    <x-forms.label for="description">{{ __('Brand Description') }}</x-forms.label>
                    <x-forms.textarea id="description" placeholder="Brand description" name="description" 
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                         value="{{ old('description') }}"  required autofocus />
                        
                    <x-forms.validation-error name='description' />
                </div>
                <!-- Brand Logo Input -->
                <div class="mt-8">
                    <x-forms.label for="logo">{{ __('Brand Logo') }}</x-forms.label>
                    <x-forms.input id="logo" class="block mt-1 w-full" type="file" name="logo" />
                    <x-forms.validation-error name='logo' />
                    <img src="" alt="logo" class="brand-logo mt-2" />
                </div>
                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-forms.button type="submit" ><i class="fas fa-save mr-2"></i>{{ __('Update') }}</x-forms.button>
                </div>

            </form>
        </div>


    </x-layout.dashboard-page-layout>
</x-app-layout>
