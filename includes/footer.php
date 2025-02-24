<?php
// footer.php
?>
<style>
    .footer-bg {
        background-color: #f7fafc;
        font-family: "Inter", serif;
    }
    .partner-logo {
        transition: transform 0.2s;
    }
    .partner-logo:hover {
        transform: scale(1.05);
    }
    .social-link {
        color: #004588;
        transition: all 0.2s;
    }
    .social-link:hover {
        color: #2b6cb0;
        transform: translateY(-2px);
    }
    .footer-link {
        color: #004588;
        transition: color 0.2s;
    }
    .footer-link:hover {
        color: #2b6cb0;
    }
    .text-color-primary {
        color: #004588 !important;
    }
    footer
    {
        background-image: url('https://www.futuregenerationnepal.org/wp-content/uploads/2023/04/footer_background.jpg')
    }
</style>

<footer class="footer-bg w-full py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Resource Partner Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-color-primary">Resource Partner</h3>
                <div class="space-y-4">
                    <a href="#" class="block">
                        <img src="images/footer_logos/nextgnnepal.png" alt="Next Generation Nepal" class="h-20 partner-logo">
                    </a>
                    <a href="#" class="block">
                        <img src="images/footer_logos/hemkumarigurung.png" alt="Hem Kumari Trust" class="h-20 w-15 partner-logo">
                    </a>
                    <a href="#" class="block">
                        <img src="images/footer_logos/atos.png" alt="ATOS" class="h-16 partner-logo">
                    </a>
                    <a href="#" class="block">
                        <img src="images/footer_logos/karuna.png" alt="KARUNA" class="h-30 partner-logo">
                    </a>
                </div>
            </div>

            <!-- We Work With Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-color-primary">We work with</h3>
                <div class="grid grid-cols-3 gap-4">
                    <?php
                    // Array of partner logos
                    $partners = [
                        'rastriya_bal_parishad.png',
                        'Kageshwori-Manohara.png',
                        'kirdarc_logo.png',
                        'radio_shreenagar.png',
                        'Karnali-Theater.png',
                        'mahabai_gaupalika.png',
                        'Pachaljharan-2.png',
                        'tilagufa_nagarpalika.png',
                        'radio_naya_karnali.png',
                        'Kalika-Municipality.png',
                        'Dordi-Gaupalika.png',
                        'radio_naya_karnali.png',
                    ];

                    foreach ($partners as $partner) {
                        echo '<img src="images/partners/' . $partner . '" alt="Partner Logo" class="w-30 h-30 object-contain partner-logo">';
                    }
                    ?>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-color-primary">Contact</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-color-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-700">Budanilkantha-9, Kathmandu</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-color-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:fgnnepal@gmail.com" class="footer-link">fgnnepal@gmail.com</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-color-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-gray-700">+977 01-4374766</span>
                    </div>

                    <!-- Social Media Links -->
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="bg-[#004588] text-white py-4 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
            <p>Copyright © <?php echo date('Y'); ?> Future Generation Nepal</p>
        </div>
    </div>
</footer>