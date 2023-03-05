@if (session('success'))
    <div class="relative">
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-5" role="alert">
            <button type="button" class="absolute top-0 right-0 mr-4 mt-3 text-gray-600 hover:text-gray-800 focus:outline-none" onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
                <span class="sr-only">Close</span>
                <i class="fas fa-times"></i>
            </button>
            <p class="font-bold mb-2">Success</p>
            <p>{{ session('success') }}</p>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <div class="font-bold"><i class="fas fa-exclamation-circle mr-2"></i>{{ __('Whoops! Something went wrong.') }}
        </div>
        <ul class="list-disc list-inside mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
