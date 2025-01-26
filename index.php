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
<section class="projects-section">
        <h2 class="projects-title">Our Projects</h2>
        
        <div class="projects-slider">
            <div class="projects-track">
                <div class="project-card">
                    <img src="images/gallery/ourprojectsliderimages/Rescue.jpg" alt="Rescue & Rehabilitation" class="project-image">
                    <span class="project-category">De-institutionalization</span>
                    <h3 class="project-title">Rescue & Rehabilitation</h3>
                    <p class="project-description">Under this project, vulnerable children are rescued from abusive situations who are victims of trafficking and displacement....</p>
                    <button class="read-more-btn">Read More</button>
                </div>
                
                <div class="project-card">
                    <img src="images/gallery/ourprojectsliderimages/Reintegration.jpg" alt="Family Reintegration" class="project-image">
                    <span class="project-category">De-institutionalization</span>
                    <h3 class="project-title">Family Reintegration</h3>
                    <p class="project-description">Our trained social workers search for the families of the rescued children and begin the reintegration process. We do this using government-approved, recommended procedures..</p>
                    <button class="read-more-btn">Read More</button>
                </div>
                
                <div class="project-card">
                    <img src="images/gallery/ourprojectsliderimages/trafficking.jpeg" alt="Trafficking Prevention" class="project-image">
                    <span class="project-category">Trafficking Prevention</span>
                    <h3 class="project-title">Trafficking Prevention</h3>
                    <p class="project-description">Recent trends show that over 50% of children rescued from exploitative institutions are often from Karnali province, Makawanpur and Chitawan districts...</p>
                    <button class="read-more-btn">Read More</button>
                </div>
                
                <div class="project-card">
                    <img src="images/gallery/ourprojectsliderimages/icp.jpeg" alt="Local Child Protection Project" class="project-image">
                    <span class="project-category">Training and Advocacy</span>
                    <h3 class="project-title">Local Child Protection Project (LCP)</h3>
                    <p class="project-description">With financial support from the Danish Government Civil Society Fund (CISU) and technical support from Alternatives To Separation (ATOS), FGN has been implementing the project since March 1, 2024.</p>
                    <button class="read-more-btn">Read More</button>
                </div>

                <div class="project-card">
                    <img src="images/gallery/ourprojectsliderimages/icp.jpeg" alt="Local Child Protection Project" class="project-image">
                    <span class="project-category">Training and Advocacy</span>
                    <h3 class="project-title">Local Child Protection Project (LCP)</h3>
                    <p class="project-description">With financial support from the Danish Government Civil Society Fund (CISU) and technical support from Alternatives To Separation (ATOS), FGN has been implementing the project since March 1, 2024.</p>
                    <button class="read-more-btn">Read More</button>
                </div>
            </div>
            
            <div class="slider-nav">
                <button class="nav-btn prev-btn">←</button>
                <button class="nav-btn next-btn">→</button>
            </div>
            
            <div class="progress-dots"></div>
        </div>
    </section>
    <!-- Our Project End -->

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
// Projects slider
const projectsTrack = document.querySelector('.projects-track');
const projectSlides = Array.from(projectsTrack.children);
const projectNextButton = document.querySelector('.next-btn');
const projectPrevButton = document.querySelector('.prev-btn');
const projectDotsContainer = document.querySelector('.progress-dots');
let projectCurrentIndex = 0;
let autoSlideInterval;

// Create dots
projectSlides.forEach((_, idx) => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (idx === 0) dot.classList.add('active');
    dot.addEventListener('click', () => goToProjectSlide(idx));
    projectDotsContainer.appendChild(dot);
});

function updateProjectDots(index) {
    document.querySelectorAll('.progress-dots .dot').forEach((dot, idx) => {
        dot.classList.toggle('active', idx === index);
    });
}

function goToProjectSlide(index) {
    if (window.innerWidth <= 768) {
        projectsTrack.style.transform = `translateX(-${index * 25}%)`;
        projectCurrentIndex = index;
        updateProjectDots(index);
    }
}

function startAutoSlide() {
    if (window.innerWidth <= 768) {
        stopAutoSlide();
        autoSlideInterval = setInterval(() => {
            projectCurrentIndex = (projectCurrentIndex + 1) % projectSlides.length;
            goToProjectSlide(projectCurrentIndex);
        }, 5000);
    }
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

function initSlider() {
    if (window.innerWidth <= 768) {
        projectsTrack.style.display = 'flex';
        projectsTrack.style.width = '400%';
        projectSlides.forEach(slide => {
            slide.style.width = '25%';
            slide.style.flexShrink = '0';
        });
        projectsTrack.style.transition = 'transform 0.3s ease-out';
        startAutoSlide();
    }
}

function disableSlider() {
    stopAutoSlide();
    projectsTrack.style.display = 'grid';
    projectsTrack.style.transform = 'none';
    projectsTrack.style.width = '100%';
    projectSlides.forEach(slide => {
        slide.style.width = '100%';
    });
}

// Navigation buttons
projectNextButton.addEventListener('click', () => {
    if (window.innerWidth <= 768) {
        projectCurrentIndex = (projectCurrentIndex + 1) % projectSlides.length;
        goToProjectSlide(projectCurrentIndex);
    }
});

projectPrevButton.addEventListener('click', () => {
    if (window.innerWidth <= 768) {
        projectCurrentIndex = (projectCurrentIndex - 1 + projectSlides.length) % projectSlides.length;
        goToProjectSlide(projectCurrentIndex);
    }
});

// Touch support
let touchStartX = null;

projectsTrack.addEventListener('touchstart', e => {
    if (window.innerWidth <= 768) {
        touchStartX = e.touches[0].clientX;
        projectsTrack.style.transition = 'none';
        stopAutoSlide();
    }
});

projectsTrack.addEventListener('touchmove', e => {
    if (!touchStartX || window.innerWidth > 768) return;
    const touchX = e.touches[0].clientX;
    const diff = touchStartX - touchX;
    const movePercent = (diff / window.innerWidth) * 100;
    const newTransform = -(projectCurrentIndex * 100) - movePercent;
    projectsTrack.style.transform = `translateX(${newTransform}%)`;
});

projectsTrack.addEventListener('touchend', e => {
    if (!touchStartX || window.innerWidth > 768) return;
    projectsTrack.style.transition = 'transform 0.3s ease-out';
    const touchEndX = e.changedTouches[0].clientX;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) > 50) {
        if (diff > 0 && projectCurrentIndex < projectSlides.length - 1) {
            projectCurrentIndex++;
        } else if (diff < 0 && projectCurrentIndex > 0) {
            projectCurrentIndex--;
        }
    }
    
    goToProjectSlide(projectCurrentIndex);
    touchStartX = null;
    startAutoSlide();
});

const mediaQuery = window.matchMedia('(max-width: 768px)');
mediaQuery.addListener(handleScreenChange);

function handleScreenChange(e) {
    if (e.matches) {
        initSlider();
    } else {
        disableSlider();
    }
}

// Initialize on load
handleScreenChange(mediaQuery);
</script>
</body>
</html>
</body>
</html>