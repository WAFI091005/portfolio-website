<?php
// navbar.php
?>
    <nav class="fixed w-full z-50 bg-gray-900 bg-opacity-95 backdrop-filter backdrop-blur-xl shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center">
                    <span class="text-white text-3xl font-bold gradient-text">WAFI</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="px-3 py-2 rounded-md text-base font-medium text-white hover:text-cyan-400 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-105">Home</a>
                        <a href="#about" class="px-3 py-2 rounded-md text-base font-medium text-white hover:text-cyan-400 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-105">About</a>
                        <a href="#skills" class="px-3 py-2 rounded-md text-base font-medium text-white hover:text-cyan-400 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-105">Skills</a>
                        <a href="#education" class="px-3 py-2 rounded-md text-base font-medium text-white hover:text-cyan-400 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-105">Education</a>
                        <a href="#contact" class="px-3 py-2 rounded-md text-base font-medium text-white hover:text-cyan-400 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-105">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 rounded-md p-2">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden bg-gray-800 bg-opacity-95 fixed inset-y-0 right-0 w-64 z-40 p-6 shadow-xl">
            <div class="flex justify-end mb-6">
                <button id="close-mobile-menu" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-4">
                <a href="#home" class="block px-3 py-2 rounded-md text-lg font-medium text-white hover:text-cyan-400 hover:bg-gray-700 transition">Home</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-lg font-medium text-white hover:text-cyan-400 hover:bg-gray-700 transition">About</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-lg font-medium text-white hover:text-cyan-400 hover:bg-gray-700 transition">Skills</a>
                <a href="#education" class="block px-3 py-2 rounded-md text-lg font-medium text-white hover:text-cyan-400 hover:bg-gray-700 transition">Education</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-lg font-medium text-white hover:text-cyan-400 hover:bg-gray-700 transition">Contact</a>
            </div>
        </div>
    </nav>