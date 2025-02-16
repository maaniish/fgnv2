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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    
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

    <!-- About us section -->
    
<section class="about-section bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">About Us</h2>
        
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-blue-50 p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Our Mission</h3>
                <p class="text-gray-700">Future Generation Nepal (FGN) is a Nepal Government registered nonprofit organization founded in 2019 by a young and dynamic team of passionate individuals. Our senior staff have over 12 years' experience in child protection, human rights and social development.</p>
            </div>

            <div class="bg-blue-50 p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Emergency Response</h3>
                <p class="text-gray-700">Our staff are experienced "first responders" to unplanned situations caused by natural disasters and emergencies. During the COVID-19 pandemic, we helped over 100 vulnerable families and children with relief support including food, supplies, and hygiene kits.</p>
            </div>
        </div>

        <div class="bg-blue-900 text-white p-8 rounded-lg shadow mb-8">
            <h3 class="text-xl font-semibold mb-4">Our Impact</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">12+</div>
                    <p>Years Experience</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">100+</div>
                    <p>Families Supported</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">2019</div>
                    <p>Founded</p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="about.php" class="inline-block bg-blue-900 text-white px-8 py-3 rounded-full hover:bg-blue-800 transition-colors">Read More</a>
        </div>
    </div>
</section>
<!-- ENd of about us section -->

<!-- Our Project Start -->

        <h2 class="projects-title">Our Projects</h2>
        
        <div class="our_futsals">
        <div class="slider">
            <!-- Futsal Card 1 -->
            <div class="futsal-card">
                <div class="futsal-image-container">
                    <img src="../img/dhanentari_futsal/2.jpg" alt="Futsal Image" class="futsal-image">
                    
                </div>
                <div class="futsal-info">
                    <p class="mini">De-institutional </p>
                    <h2 class="futsal-title">Rescue & Rehabilitation</h2>
                    <p class="futsal-location">Under this project, vulnerable children are rescued from abusive situations who are victims of trafficking and displacement.....</p>
                    <button class="futsal-button">Learn More</button>
                </div>
            </div>

            <!-- Futsal Card 2 -->
            <div class="futsal-card">
                <div class="futsal-image-container">
                    <img src="../img/dhanentari_futsal/2.jpg" alt="Futsal Image" class="futsal-image">
                    
                </div>
                <div class="futsal-info">
                    <p class="mini">Trafficking Prevention </p>
                    <h2 class="futsal-title">Trafficking Prevention</h2>
                    <p class="futsal-location">Recent trends show that over 50% of children rescued from exploitative
                         institutions are often from Karnali province, Makawanpur and Chitawan districts. 
                         ...</p>
                    <button class="futsal-button">Learn More</button>
                </div>
            </div>

            <!-- Futsal Card 1 -->
            <div class="futsal-card">
                <div class="futsal-image-container">
                    <img src="../img/dhanentari_futsal/2.jpg" alt="Futsal Image" class="futsal-image">
                    
                </div>
                <div class="futsal-info">
                    <p class="mini">De-institutional </p>
                    <h2 class="futsal-title">Rescue & Rehabilitation</h2>
                    <p class="futsal-location">Under this project, vulnerable children are rescued from abusive situations who are victims of trafficking and displacement.....</p>
                    <button class="futsal-button">Learn More</button>
                </div>
            </div>

            <!-- Futsal Card 1 -->
            <div class="futsal-card">
                <div class="futsal-image-container">
                    <img src="../img/dhanentari_futsal/2.jpg" alt="Futsal Image" class="futsal-image">
                    
                </div>
                <div class="futsal-info">
                    <p class="mini">De-institutional </p>
                    <h2 class="futsal-title">Rescue & Rehabilitation</h2>
                    <p class="futsal-location">Under this project, vulnerable children are rescued from abusive situations who are victims of trafficking and displacement.....</p>
                    <button class="futsal-button">Learn More</button>
                </div>
            </div>

            <!-- Futsal Card 1 -->
            <div class="futsal-card">
                <div class="futsal-image-container">
                    <img src="../img/dhanentari_futsal/2.jpg" alt="Futsal Image" class="futsal-image">
                    
                </div>
                <div class="futsal-info">
                    <p class="mini">De-institutional </p>
                    <h2 class="futsal-title">Rescue & Rehabilitation</h2>
                    <p class="futsal-location">Under this project, vulnerable children are rescued from abusive situations who are victims of trafficking and displacement.....</p>
                    <button class="futsal-button">Learn More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->

<!-- Where we work Start -->
<div class="wherewework">
    <h1 class="text-3xl font-bold text-center text-blue-900 mb-8">Where We Work</h1>
    <div class="map flex justify-center">
        <img 
            src="images/Map.png" 
            alt="Map of Nepal" 
            class="w-full h-auto md:w-3/4 lg:w-2/3"
        >
    </div>
</div>
<!-- End of where we work -->

<!-- Our Partner and future goals Start -->
<section class="pg-section">
        <div class="pg-container">
            <div class="pg-header">
                <svg class="pg-icon" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="6"></circle>
                    <circle cx="12" cy="12" r="2"></circle>
                </svg>
                <h1 class="pg-title">Our Partners and Future Goals</h1>
            </div>
            
            <div class="pg-grid">
                <div class="pg-image-wrapper">
                    <img class="pg-image" src="images/Mother-and-Daughter.jpg" alt="Mother holding child in mountainous background">
                    <div class="pg-image-overlay"></div>
                </div>
                
                <div class="pg-content bg-blue-50">
                    <p class="pg-text">We continue to expand our work in the sector of child protection, continue working in the de-institutionalization of child care homes, alternative care, preventing family separations as well as to become involved with women and family issues.</p>
                    <p class="pg-text">Our team is well trained and capable to broaden our reach into new areas of protection. We hope that new partners will have an interest in who we are and what we do and we welcome your inquiries.</p>
                    <a href="#contact" class="pg-cta">Partner With Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partner and future goals End -->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>

        // Header Slider
const headerSlides = document.querySelectorAll('.slide');
let headerCurrentSlide = 0;

const headerDotsContainer = document.querySelector('.dots');
headerSlides.forEach((_, index) => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
        headerCurrentSlide = index;
        showHeaderSlide(headerCurrentSlide);
    });
    headerDotsContainer.appendChild(dot);
});

function showHeaderSlide(index) {
    headerSlides.forEach(slide => slide.classList.remove('active'));
    document.querySelectorAll('.dots .dot').forEach(dot => dot.classList.remove('active'));
    
    headerSlides[index].classList.add('active');
    document.querySelectorAll('.dots .dot')[index].classList.add('active');
}

function nextHeaderSlide() {
    headerCurrentSlide = (headerCurrentSlide + 1) % headerSlides.length;
    showHeaderSlide(headerCurrentSlide);
}

setInterval(nextHeaderSlide, 5000);

// Header slider touch support
let headerTouchStartX = 0;
let headerTouchEndX = 0;

document.querySelector('.slider-container').addEventListener('touchstart', e => {
    headerTouchStartX = e.changedTouches[0].screenX;
});

document.querySelector('.slider-container').addEventListener('touchend', e => {
    headerTouchEndX = e.changedTouches[0].screenX;
    if (headerTouchStartX - headerTouchEndX > 50) {
        nextHeaderSlide();
    } else if (headerTouchEndX - headerTouchStartX > 50) {
        headerCurrentSlide = (headerCurrentSlide - 1 + headerSlides.length) % headerSlides.length;
        showHeaderSlide(headerCurrentSlide);
    }
});

// Projects slider
$(document).ready(function () {
            $('.slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false
                        }
                    }
                ]
            });
        });

// Initialize on load

</script>
</body>
</html>
</body>
</html>