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
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Enhanced Nav Link Styles */
    .nav-link {
        color: #004588;
        font-weight: 800;
        position: relative;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #004588;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #2b6cb0;
        transform: translateY(-1px);
    }

    .nav-link.active {
        color: #000000;
    }

    .nav-link.active::after {
        width: 100%;
        background: #000000;
    }

    /* Enhanced Dropdown Styles */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: block;
        position: absolute;
        background-color: white;
        min-width: 220px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        border-radius: 8px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1000;
        overflow: hidden;
    }

    .dropdown:hover .dropdown-content {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-content a {
        color: #004588;
        padding: 12px 20px;
        text-decoration: none;
        display: block;
        font-weight: 600;
        transition: all 0.2s ease;
        position: relative;
        z-index: 1;
    }

    .dropdown-content a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 0;
        background: #f0f7ff;
        z-index: -1;
        transition: all 0.3s ease;
    }

    .dropdown-content a:hover::before {
        width: 100%;
    }

    .dropdown-content a:hover {
        color: #004588;
        padding-left: 25px;
    }

    /* Mobile Menu Enhancements */
    .offcanvas {
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: -5px 0 25px rgba(0,0,0,0.1);
    }

    .offcanvas.show {
        transform: translateX(0);
    }

    .backdrop {
        display: none;
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(4px);
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .backdrop.show {
        display: block;
        opacity: 1;
    }

    /* Mobile Dropdown Enhancements */
    .mobile-dropdown {
        margin-left: 1rem;
        display: none;
        opacity: 0;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    .mobile-dropdown.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .mobile-dropdown a {
        position: relative;
        padding-left: 20px;
    }

    .mobile-dropdown a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #004588;
        transform: translateY(-50%);
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .mobile-dropdown a:hover::before {
        opacity: 1;
    }

    /* Menu Button Animation */
    .menu-btn-container {
        position: relative;
        width: 24px;
        height: 24px;
    }

    .menu-btn {
        transition: all 0.3s ease;
    }

    .menu-btn.active {
        transform: rotate(90deg);
    }

    /* Add media queries for responsive adjustments */
    @media (max-width: 767px) {
        .dropdown-content {
            display: none !important;
        }
        
        .desktop-only {
            display: none;
        }
    }

    @media (min-width: 768px) {
        .mobile-only {
            display: none !important;
        }
        
        .offcanvas,
        .backdrop {
            display: none !important;
        }
    }

    /* Enhanced Mobile Dropdown */
    .mobile-dropdown {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, opacity 0.2s ease;
    }

    .mobile-dropdown.show {
        max-height: 500px; /* Adjust based on content */
        opacity: 1;
    }
</style>

<header class="header-bg w-full py-3 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center">
            <!-- Logo with hover effect -->
            <div class="flex items-center">
                <a href="index.php" class="transform transition hover:scale-105">
                    <img src="images/gallery/FGN-Logo.png" alt="Future Generation Nepal" class="h-20">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Home</a>
                
                <!-- Who We Are Dropdown -->
                <div class="dropdown">
                    <a href="who-we-are.php" class="nav-link <?php echo ($currentPage === 'who-we-are') ? 'active' : ''; ?>">
                        Who We Are
                        <svg class="inline-block ml-1 w-4 h-4 transition-transform duration-200 transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="our-story.php">Our Story</a>
                        <a href="meet-fgn-team.php">Meet FGN Team</a>
                        <a href="our-values.php">Our Values</a>
                    </div>
                </div>

                <!-- What We Do Dropdown -->
                <div class="dropdown">
                    <a href="what-we-do.php" class="nav-link <?php echo ($currentPage === 'what-we-do') ? 'active' : ''; ?>">
                        What We Do
                        <svg class="inline-block ml-1 w-4 h-4 transition-transform duration-200 transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="rescue-rehabilitation.php">Rescue & Rehabilitation</a>
                        <a href="family-integration.php">Family Integration</a>
                        <a href="trafficking-prevention.php">Trafficking Prevention</a>
                        <a href="livelihood-project.php">Livelihood Project</a>
                        <a href="covid-response.php">COVID-19 Response</a>
                    </div>
                </div>

                <a href="contact.php" class="nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact Us</a>
                
                <!-- Donate Button with special styling -->
                <a 
    href="donate.php" 
    class="nav-link <?php echo ($currentPage === 'donate') ? 'active' : ''; ?> 
    inline-block px-6 py-2 
    bg-blue-600 
    text-white 
    rounded-full 
    hover:bg-blue-700 
    transform 
    hover:scale-105 
    transition-all 
    duration-200 
    shadow-md 
    hover:shadow-lg"
>
    Donate
</a>
                
                <!-- More Dropdown -->
                <div class="dropdown">
                    <a href="more.php" class="nav-link <?php echo ($currentPage === 'more') ? 'active' : ''; ?>">
                        More
                        <svg class="inline-block ml-1 w-4 h-4 transition-transform duration-200 transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="fgn-in-news.php">FGN in News</a>
                        <a href="news-and-updates.php">News and Updates</a>
                        <a href="career.php">Career</a>
                        <a href="gallery.php">Gallery</a>
                    </div>
                </div>
            </nav>

            <!-- Mobile menu button -->
            <button id="menuBtn" class="md:hidden p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none menu-btn">
                <div class="menu-btn-container">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</header>

<!-- Enhanced Offcanvas Menu -->
<div id="offcanvas" class="offcanvas fixed top-0 right-0 h-full w-72 bg-white shadow-lg z-50 md:hidden overflow-y-auto">
    <div class="p-4">
        <button id="closeBtn" class="absolute top-4 right-4 p-2 rounded-full hover:bg-gray-100 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <nav class="mt-12 flex flex-col space-y-4">
            <!-- Mobile menu items with enhanced animations -->
            <a href="index.php" class="mobile-nav-link text-color-primary hover:text-blue-800 py-2 transition-all duration-200 hover:pl-4<?php echo ($currentPage === 'home') ? ' font-bold' : ''; ?>">Home</a>
            
            <!-- Mobile Who We Are -->
            <div class="mobile-nav-item">
                <a href="#" class="mobile-dropdown-trigger text-color-primary hover:text-blue-800 py-2 flex items-center justify-between<?php echo ($currentPage === 'who-we-are') ? ' font-bold' : ''; ?>">
                    Who We Are
                    <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div class="mobile-dropdown pl-4">
                    <a href="our-story.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Our Story</a>
                    <a href="meet-fgn-team.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Meet FGN Team</a>
                    <a href="our-values.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Our Values</a>
                </div>
            </div>

            <!-- Mobile What We Do -->
            <div class="mobile-nav-item">
                <a href="#" class="mobile-dropdown-trigger text-color-primary hover:text-blue-800 py-2 flex items-center justify-between<?php echo ($currentPage === 'who-we-are') ? ' font-bold' : ''; ?>">
                    What We Do
                    <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div class="mobile-dropdown pl-4">
                    <a href="our-story.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Our Story</a>
                    <a href="meet-fgn-team.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Meet FGN Team</a>
                    <a href="our-values.php" class="block py-2 text-color-primary hover:text-blue-800 transition-all duration-200 hover:pl-2">Our Values</a>
                </div>
            </div>

            <!-- Similar structure for What We Do and More sections -->
            <!-- [Previous mobile menu items remain the same with enhanced styling] -->
        </nav>
    </div>
</div>

<!-- Enhanced Backdrop -->
<div id="backdrop" class="backdrop fixed inset-0 z-40 md:hidden"></div>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const offcanvas = document.getElementById('offcanvas');
    const backdrop = document.getElementById('backdrop');
    const mobileDropdownTriggers = document.querySelectorAll('.mobile-dropdown-trigger');

    function toggleMenu() {
        offcanvas.classList.toggle('show');
        backdrop.classList.toggle('show');
        menuBtn.classList.toggle('active');
        document.body.style.overflow = offcanvas.classList.contains('show') ? 'hidden' : '';
    }

    // Enhanced mobile dropdowns with animation
    mobileDropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const dropdown = trigger.nextElementSibling;
            const arrow = trigger.querySelector('svg');
            
            // Toggle dropdown
            dropdown.classList.toggle('show');
            
            // Rotate arrow
            arrow.style.transform = dropdown.classList.contains('show') ? 'rotate(180deg)' : '';
        });
    });

    // Add smooth scroll behavior when clicking on nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    menuBtn.addEventListener('click', toggleMenu);
    closeBtn.addEventListener('click', toggleMenu);
    backdrop.addEventListener('click', toggleMenu);

    // Close mobile menu when screen size changes to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) { // md breakpoint
            offcanvas.classList.remove('show');
            backdrop.classList.remove('show');
            menuBtn.classList.remove('active');
            document.body.style.overflow = '';
            
            // Reset all mobile dropdowns
            document.querySelectorAll('.mobile-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
            
            // Reset all arrows
            document.querySelectorAll('.mobile-dropdown-trigger svg').forEach(arrow => {
                arrow.style.transform = '';
            });
        }
    });

    // Add hover effect for desktop dropdown items
    const dropdownItems = document.querySelectorAll('.dropdown-content a');
    dropdownItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateX(5px)';
            setTimeout(() => {
                item.style.transform = 'translateX(0)';
            }, 200);
        });
    });

    // Enhance mobile dropdown animations
    const mobileNavItems = document.querySelectorAll('.mobile-nav-item');
    mobileNavItems.forEach(item => {
        const trigger = item.querySelector('.mobile-dropdown-trigger');
        const dropdown = item.querySelector('.mobile-dropdown');
        const arrow = trigger.querySelector('svg');
        
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Close other open dropdowns
            mobileNavItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherDropdown = otherItem.querySelector('.mobile-dropdown');
                    const otherArrow = otherItem.querySelector('svg');
                    if (otherDropdown.classList.contains('show')) {
                        otherDropdown.classList.remove('show');
                        otherArrow.style.transform = '';
                    }
                }
            });
            
            // Toggle current dropdown with smooth animation
            dropdown.style.transition = 'all 0.3s ease';
            dropdown.classList.toggle('show');
            
            // Animate arrow rotation
            arrow.style.transition = 'transform 0.3s ease';
            arrow.style.transform = dropdown.classList.contains('show') ? 'rotate(180deg)' : '';
        });
    });

    // Add scroll-based header effects
    let lastScroll = 0;
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
            header.style.boxShadow = 'none';
            return;
        }
        
        if (currentScroll > lastScroll) {
            // Scrolling down
            header.style.transform = 'translateY(-100%)';
            header.style.transition = 'transform 0.3s ease-in-out';
        } else {
            // Scrolling up
            header.style.transform = 'translateY(0)';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }
        
        lastScroll = currentScroll;
    });

    // Add touch support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    }, false);

    document.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, false);

    function handleSwipe() {
        const swipeThreshold = 100;
        const swipeLength = touchEndX - touchStartX;
        
        if (Math.abs(swipeLength) > swipeThreshold) {
            if (swipeLength > 0 && offcanvas.classList.contains('show')) {
                // Swipe right to close menu
                toggleMenu();
            } else if (swipeLength < 0 && !offcanvas.classList.contains('show')) {
                // Swipe left to open menu
                toggleMenu();
            }
        }
    }

    // Add keyboard navigation support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && offcanvas.classList.contains('show')) {
            toggleMenu();
        }
    });

    // Preload dropdown backgrounds for smooth transitions
    const dropdownBgs = document.querySelectorAll('.dropdown-content');
    dropdownBgs.forEach(bg => {
        if (window.innerWidth >= 768) {
            bg.style.display = 'block';
            bg.style.visibility = 'hidden';
            setTimeout(() => {
                bg.style.display = '';
                bg.style.visibility = '';
            }, 100);
        }
    });
     // Enhanced Responsive Handler
     function handleResponsive() {
        if (window.innerWidth >= 768) {
            // Reset mobile menu state on desktop
            offcanvas.classList.remove('show');
            backdrop.classList.remove('show');
            menuBtn.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    // Enhanced Resize Handler
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            handleResponsive();
            // Reset mobile dropdowns
            document.querySelectorAll('.mobile-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
                dropdown.style.maxHeight = '';
            });
            document.querySelectorAll('.mobile-dropdown-trigger svg').forEach(arrow => {
                arrow.style.transform = '';
            });
        }, 250);
    });

    // Enhanced Touch Handling
    function handleSwipe() {
        const swipeThreshold = 50;
        const swipeLength = touchEndX - touchStartX;
        
        if (Math.abs(swipeLength) > swipeThreshold) {
            if (swipeLength > 0 && offcanvas.classList.contains('show')) {
                toggleMenu();
            }
        }
    }

    // Enhanced Dropdown Transitions
    mobileDropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const dropdown = trigger.nextElementSibling;
            const arrow = trigger.querySelector('svg');
            
            // Toggle dropdown with smooth animation
            if (dropdown.classList.contains('show')) {
                dropdown.style.maxHeight = `${dropdown.scrollHeight}px`;
                setTimeout(() => dropdown.style.maxHeight = '', 10);
            } else {
                dropdown.style.maxHeight = `${dropdown.scrollHeight}px`;
                setTimeout(() => dropdown.style.maxHeight = 'none', 300);
            }
            
            dropdown.classList.toggle('show');
            arrow.style.transform = dropdown.classList.contains('show') ? 'rotate(180deg)' : '';
        });
    });

    // Initialize
    handleResponsive();
</script>