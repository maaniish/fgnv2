<?php 
// header.php
?>
<style>
    body {
        font-family: "Inter", serif;
       
    }
   
    .header-bg {
        background-image: url('images/gallery/header_background.jpg');
        background-color: #f7fafc;
        background-size: cover;
        background-position: center;
    }
    .nav-link {
        color: #004588;
        transition: color 0.2s;
        font-weight: 800;
    }
    .nav-link:hover {
        color: #2b6cb0;
    }
    .nav-link.active {
        color: #000000;
        font-weight: 800;
    }
    .offcanvas {
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }
    .offcanvas.show {
        transform: translateX(0);
    }
    .backdrop {
        display: none;
        background: rgba(0, 0, 0, 0.5);
    }
    .backdrop.show {
        display: block;
    }
    .text-color-primary {
        color: #004588 !important;
    }
</style>

<header class="header-bg w-full py-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="index.php">
                    <img src="images/gallery/FGN-Logo.png" alt="Future Generation Nepal" class="h-20">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="who-we-are.php" class="nav-link <?php echo ($currentPage === 'who-we-are') ? 'active' : ''; ?>">Who We Are</a>
                <a href="what-we-do.php" class="nav-link <?php echo ($currentPage === 'what-we-do') ? 'active' : ''; ?>">What We Do</a>
                <a href="contact.php" class="nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact Us</a>
                <a href="donate.php" class="nav-link <?php echo ($currentPage === 'donate') ? 'active' : ''; ?>">Donate</a>
                <a href="more.php" class="nav-link <?php echo ($currentPage === 'more') ? 'active' : ''; ?>">More</a>
            </nav>

            <!-- Mobile menu button -->
            <button id="menuBtn" class="md:hidden p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none">
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
            <a href="index.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'home') ? ' font-bold' : ''; ?>">Home</a>
            <a href="who-we-are.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'who-we-are') ? ' font-bold' : ''; ?>">Who We Are</a>
            <a href="what-we-do.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'what-we-do') ? ' font-bold' : ''; ?>">What We Do</a>
            <a href="contact.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'contact') ? ' font-bold' : ''; ?>">Contact Us</a>
            <a href="donate.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'donate') ? ' font-bold' : ''; ?>">Donate</a>
            <a href="more.php" class="text-color-primary hover:text-blue-800 py-2<?php echo ($currentPage === 'more') ? ' font-bold' : ''; ?>">More</a>
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