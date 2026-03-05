<header class="flex items-center justify-center gap-8 w-full bg-white shadow-md rounded-b-3xl overflow-hidden">

        <!-- Left Logo Card -->
        <div class="flex self-justify-end">
            <div class="bg-[#1E73BE] w-20 h-20 rounded-br-3xl rounded-tl-3xl flex flex-col items-center justify-center text-white shadow-lg">
                <img src="{{ asset('/assets/images/bmm-logo.png') }}" alt="Logo" class="w-14 mb-2">
                <!-- <h2 class="text-lg font-bold tracking-wide text-center leading-tight">
                    BANBURY <br> MADNI MASJID
                </h2> -->
            </div>
        </div>
    
        <div>
    <!-- Top Header -->
    <div class="flex items-center justify-between px-6 py-4">



        <!-- Right Content -->
        <div class="flex items-center space-x-6">

            <!-- Search -->
            <div class="relative">
                <input type="text"
                    placeholder="Search..."
                    class="pl-4 pr-10 py-2 w-64 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-blue-500 absolute right-3 top-2.5"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m2.1-5.4a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                </svg>
            </div>

            <!-- Email -->
            <div class="flex items-center space-x-2 text-gray-600 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-blue-500"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12H8m8 0l-8 5m8-5l-8-5" />
                </svg>
                <span>info@banburymadnimasjid.com</span>
            </div>

            <!-- Address -->
            <div class="flex items-center space-x-2 text-gray-600 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-blue-500"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                </svg>
                <span>Merton St, Banbury OX16 4RX, UK</span>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-3">
                <a href="#"
                    class="bg-[#1E73BE] text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Jum'ah Giving
                </a>

                <a href="#"
                    class="border border-[#1E73BE] text-[#1E73BE] px-5 py-2 rounded-lg font-semibold hover:bg-[#1E73BE] hover:text-white transition">
                    Donate Now
                </a>
            </div>

        </div>
    </div>

    <!-- Bottom Navbar -->
    <nav class="border-t border-gray-200">
        <ul class="flex items-center justify-center space-x-8 py-3 text-gray-700 font-medium">
            <li><a href="/" class="hover:text-[#1E73BE]">Home</a></li>
            <li><a href="/about" class="hover:text-[#1E73BE]">About Us</a></li>
            <li><a href="/blogs" class="hover:text-[#1E73BE]">Blogs</a></li>
            <li><a href="/contact" class="hover:text-[#1E73BE]">Contact</a></li>
        </ul>
    </nav>
</div>
</header>