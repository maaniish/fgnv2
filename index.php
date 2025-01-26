<?php
$pageTitle = "Home";
$currentPage = "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Future Generation Nepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <?php include './includes/header.php'; ?>
    <!-- Your page content here -->
    
    <div class="container">
        <div class="slider-container">
            <div class="slide active">
                <img src="images/gallery/sliderone.jpg" alt="Future Generation Nepal">
                <div class="caption">
                    <h2>Future Generation Nepal</h2>
                    <p>Building Better Future For Children in Nepal</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/gallery/slidertwo.jpg" alt="Local Impact">
                <div class="caption">
                    <h2>Local Impact</h2>
                    <p>Grassroots Organization Making a Difference</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/gallery/sliderthree.jpg" alt="Child Protection">
                <div class="caption">
                    <h2>Child Protection</h2>
                    <p>Leading Child and Family Protection in Nepal</p>
                </div>
            </div>
            <div class="dots"></div>
        </div>
        <div class="content">
            <h1>Future Generation Nepal</h1>
            <p>Building Better Future For Children in Nepal</p>
            <p>We Are A Grassroots on the Ground Local Nepali-Run Non Profit Organization</p>
            <p>Local leader in Child and Family Protection in Nepal</p>
            <button class="know-more">Know More</button>
        </div>
    </div>

    <script>

        // Slider
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        // Create dots
        const dotsContainer = document.querySelector('.dots');
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
            dotsContainer.appendChild(dot);
        });

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            document.querySelectorAll('.dot')[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Auto-slide every 5 seconds
        setInterval(nextSlide, 5000);

        // Add touch support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        document.querySelector('.slider-container').addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.querySelector('.slider-container').addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                nextSlide();
            } else if (touchEndX - touchStartX > 50) {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }
        });
        // End Slider
    </script>
</body>
</html>
</body>
</html>