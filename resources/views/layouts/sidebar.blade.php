<nav class="fixed top-0 z-50 w-full bg-gray-800 shadow-xl">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button id="sidebarToggle" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href={{ route('dashboard') }} class="flex ms-2 md:me-24">
                    <img src="https://seeklogo.com/images/L/laravel-logo-9B01588B1F-seeklogo.com.png" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">
                        Location des Voitures
                    </span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button id="profileToggle" type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 focus:ring-gray-600"
                            aria-expanded="false">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 absolute top-8 right-5 text-base list-none bg-white divide-y divide-gray-100 rounded shadow bg-gray-700 divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 text-white" role="none">
                                Neil Sims
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate text-gray-300" role="none">
                                neil.sims@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-gray-300 hover:bg-gray-600 hover:text-white"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 shadow-xl w-64 h-screen pt-20 transition-transform bg-gray-700 -translate-x-full border-r border-gray-200 sm:translate-x-0 bg-gray-800 border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
        <ul class="space-y-2 font-medium">  
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 rounded text-white hover:text-gray-700 hover:bg-white group">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products') }}"
                    class="flex items-center p-2 rounded text-white hover:text-gray-700 hover:bg-white group">
                    <i class="fa-solid fa-warehouse"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Garages</span>
                </a>
            </li>
            <li>
                <a href="/profile"
                    class="flex items-center p-2 rounded text-white hover:text-gray-700 hover:bg-white group">
                    <i class="fa-solid fa-address-card"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('logo-sidebar');
        const profileToggle = document.getElementById('profileToggle');
        const dropdownUser = document.getElementById('dropdown-user');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
        });

        profileToggle.addEventListener('click', function() {
            dropdownUser.classList.toggle('hidden');
        });
    });
</script>
