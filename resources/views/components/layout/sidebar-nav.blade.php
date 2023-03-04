<nav class="flex-grow px-4 py-8=4">
    <a href={{route('brands.index')}} class="flex items-center py-2 px-4 text-gray-600 hover:bg-gray-100 hover:text-gray-800 {{ Request::routeIs('brands.*') ? 'bg-gray-100 text-gray-800 font-bold' : '' }}">
        <i class="fas fa-copyright mr-3"></i>
        Brands
    </a>
    <a href="#" class="flex items-center py-2 px-4 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
        <i class="fas fa-users mr-3"></i>
        Users
    </a>
    <a href="#" class="flex items-center py-2 px-4 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
        <i class="fas fa-cog mr-3"></i>
        Settings
    </a>
</nav>
