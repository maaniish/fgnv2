<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Generation Nepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    
</head>
<body>
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="images/gallery/FGN-Logo.png" alt="Future Generation Nepal" class="h-12 w-auto">
                    
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-800">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800">Who We Are</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800">What We Do</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800">Contact Us</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800">Donate</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800">More</a>
                </nav>

                <!-- Mobile menu button -->
                <button id="menuBtn" class="md:hidden p-2 rounded-md text-gray-700 hover:text-blue-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Offcanvas Menu -->
    <div id="offcanvas" class="offcanvas fixed top-0 right-0 h-full w-64 bg-white shadow-lg z-50 md:hidden">
        <div class="p-4">
            <button id="closeBtn" class="absolute top-4 right-4 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <nav class="mt-12 flex flex-col space-y-4">
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">Who We Are</a>
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">What We Do</a>
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">Contact Us</a>
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">Donate</a>
                <a href="#" class="text-gray-700 hover:text-blue-800 py-2">More</a>
            </nav>
        </div>
    </div>

    <!-- Backdrop -->
    <div id="backdrop" class="backdrop fixed inset-0 z-40 md:hidden"></div>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const closeBtn = document.getElementById('closeBtn');
        const offcanvas = document.getElementById('offcanvas');
        const backdrop = document.getElementById('backdrop');

        function toggleMenu() {
            offcanvas.classList.toggle('show');
            backdrop.classList.toggle('show');
        }

        menuBtn.addEventListener('click', toggleMenu);
        closeBtn.addEventListener('click', toggleMenu);
        backdrop.addEventListener('click', toggleMenu);
    </script>
</body>
</html>