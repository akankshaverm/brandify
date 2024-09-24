<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandify Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="bg-blue-900">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <!-- Mobile Menu Button-->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" onclick="toggleMobileMenu()">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <svg id="menu-icon-open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg id="menu-icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Logo Section -->
                <div class="flex-1 flex justify-between sm:items-stretch">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-white font-bold text-3xl">Brandify</a>
                    </div>

                    <!-- Links Section (Desktop) -->
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="/" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium ring-blue-600">HOME</a>

                            <div class="relative group">
                                <button class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                    ABOUT US
                                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.292 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div class="absolute hidden group-hover:block bg-white text-gray-800 rounded-md shadow-lg mt-1">
                                    <a href="{{route('intropage')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">intro</a>
                                    <a href="{{route('founders')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">our Founders</a>
                                    <a href="{{route('advisory-board')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Advisory board</a>
                                </div>
                            </div>

                            <a href="{{route('partnership')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">PARTNER WITH US</a>

                            <div class="relative group">
                                <button class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                    NETWORK
                                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.292 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div class="absolute hidden group-hover:block bg-white text-gray-800 rounded-md shadow-lg mt-1">
                                    <a href="{{route('network-distribution')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Distribution</a>
                                    <a href="{{route('case-study')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">case study</a>
                                </div>
                            </div>

                            <a href="{{route('faq')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">FAQs</a>
                            <a href="{{route('contactUs')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="{{route('aboutpage')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
                <a href="{{route('partnership')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Partnership</a>

                <div class="space-y-1">
                    <button class="text-gray-300 hover:bg-blue-700 hover:text-white block w-full text-left px-3 py-2 rounded-md text-base font-medium">Network</button>
                    <div class="pl-5 space-y-1">
                        <a href="{{route('network-distribution')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Distribution</a>
                        <a href="{{route('case-study')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Case Study</a>
                    </div>
                </div>

                <a href="{{route('faq')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">FAQs</a>
                <a href="{{route('contactUs')}}" class="text-gray-300 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- JavaScript to toggle the mobile menu -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuIconOpen = document.getElementById('menu-icon-open');
            const menuIconClose = document.getElementById('menu-icon-close');

            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menuIconOpen.classList.add('hidden');
                menuIconClose.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                menuIconOpen.classList.remove('hidden');
                menuIconClose.classList.add('hidden');
            }
        }
    </script>

</body>

</html>
