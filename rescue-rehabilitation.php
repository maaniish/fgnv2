<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rescue & Rehabilitation Project</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a4b84;
            --secondary-color: #f5f5f5;
            --text-color: #333;
            --spacing: 2rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #f9f9f9;
        }

        .hero {
            background-color: white;
            padding: var(--spacing);
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .hero h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .trophy-icon {
            color: #ffd700;
            font-size: 2rem;
            margin: 1rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: var(--spacing);
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--spacing);
            margin-top: var(--spacing);
        }

        @media (min-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .carousel {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            min-width: 100%;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .carousel-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            border: none;
        }

        .carousel-dot.active {
            background: white;
        }

        .info-card {
            background: white;
            padding: var(--spacing);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-card h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .info-card p {
            margin-bottom: 1rem;
        }

        .contact-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .contact-button:hover {
            transform: translateY(-2px);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: var(--spacing);
        }

        .stat-card {
            background: var(--primary-color);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
<?php include './includes/header.php'; ?>
    <div class="hero">
        <h1>Rescue & Rehabilitation Project</h1>
        <div class="trophy-icon">🏆</div>
    </div>

    <div class="container">
        <div class="content-grid">
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="/api/placeholder/800/400" alt="Rescue operation">
                    </div>
                    <div class="carousel-item">
                        <img src="/api/placeholder/800/400" alt="Children being helped">
                    </div>
                    <div class="carousel-item">
                        <img src="/api/placeholder/800/400" alt="Support services">
                    </div>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-dot active"></button>
                    <button class="carousel-dot"></button>
                    <button class="carousel-dot"></button>
                </div>
            </div>

            <div class="info-card">
                <h2>Our Mission</h2>
                <p>Future Generation Nepal in partnership with Next Generation Nepal rescues vulnerable children from abusive situations, particularly victims of trafficking and displacement.</p>
                <p>Our teams are responsible to search for the families and assess the family conditions before any reintegration is done. All the rescue operations are done with support from local child welfare authorities, NCRC, and Nepal police.</p>
                <p>We care for rescued children from the time of rescue until they have been safely reintegrated with their families. Once the children are rescued, we give special attention to their psychological, emotional, and medical needs and prepare them for family reintegration.</p>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">150+</div>
                <div>Children Rescued</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">90%</div>
                <div>Successful Reintegration</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <div>Support Available</div>
            </div>
        </div>
    </div>

    <a href="#contact" class="contact-button">
        Contact us
        <span>💌</span>
    </a>

    <script>
        // Carousel functionality
        const carousel = document.querySelector('.carousel-inner');
        const dots = document.querySelectorAll('.carousel-dot');
        let currentSlide = 0;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Auto-advance carousel
        setInterval(() => {
            currentSlide = (currentSlide + 1) % dots.length;
            updateCarousel();
        }, 5000);
    </script>
</body>
</html>