<header class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-4">
      <!-- Left: Logo -->
      <a href="{{ route('home') }}">
        <div class="text-2xl font-bold text-blue-600">Welcome</div>
      </a>


      <!-- Right: Links -->
      <div class="hidden md:flex space-x-4 items-center">
        <a href="{{route('aboutUs')}}" class="text-gray-600 hover:text-blue-600 transition font-medium">About Us</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden pb-4">
      <a href="#about-us" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">About Us</a>
      <a href="#contact" class="block py-2 text-blue-600 font-semibold">Contact Form</a>
    </div>
  </div>

  <script>
    // Simple toggle for mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>
</header>