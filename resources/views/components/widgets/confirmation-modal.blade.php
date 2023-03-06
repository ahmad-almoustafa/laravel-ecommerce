@props(['title','message','confirm_button_text'])
<!-- Delete Confirmation Modal -->
<div id="confirmation-modal" class="hidden">
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal panel -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: exclamation -->
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m0-16V8m0 8v4"></path>
                            </svg>
                        </div>

                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{$title}}
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    {{$message}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <form id="confirmation-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <x-forms.button type="submit"
                            class="bg-red-600 text-white hover:bg-red-700  focus:ring-red-500 ">
              
                            {{ !empty($confirm_button_text) ? $confirm_button_text : 'Delete' }} 
                        </x-forms.button>
                        <x-forms.button type="button" onclick="closeModal()"
                            class="bg-white text-gray-700 hover:text-gray-500  border-gray-300 focus:ring-indigo-500 ">
                            Cancel
                        </x-forms.button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(url) {
        // Set the form action to the specified URL
        document.getElementById('confirmation-form').action = url;
        // Open the modal
        document.getElementById('confirmation-modal').classList.add('block');
        document.getElementById('confirmation-modal').classList.remove('hidden');
    }

    function closeModal() {
        // Close the modal
        document.getElementById('confirmation-modal').classList.add('hidden');
        document.getElementById('confirmation-modal').classList.remove('block');
    }
</script>
