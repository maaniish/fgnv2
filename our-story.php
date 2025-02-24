<?php
$pageTitle = "Our Story";
$currentPage = "our-story";  // This matches the navigation item
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .our-story {
            
            margin: 0 auto;
            padding: 4rem 2rem;
            background-color: #faf9f7;
            background-image: url('images/gallery/header_background.jpg');
        }

        .story-title {
            text-align: center;
            color: #003366;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            position: relative;
        }

        .story-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #003366;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .story-image {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .story-image:hover {
            transform: translateY(-5px);
        }

        .story-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .story-text {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .story-paragraph {
            color: #333;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .impact-numbers {
            margin-top: 2rem;
            padding: 2rem;
            background: linear-gradient(135deg, #003366 0%, #004d99 100%);
            border-radius: 8px;
            color: white;
            text-align: center;
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .impact-item {
            padding: 1rem;
        }

        .impact-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .impact-text {
            font-size: 1rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .story-content {
                grid-template-columns: 1fr;
            }

            .story-image {
                margin: 0 auto;
                max-width: 500px;
            }

            .impact-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animation for scroll reveal */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
</head>
<body>
<?php include './includes/header.php'; ?>
<!-- Your page content here -->
    <section class="our-story">
        <h1 class="story-title">Our Story</h1>
        
        <div class="story-content">
            <div class="story-image">
                <img src="images/Team-Photo.jpg" alt="Future Generation Nepal Team" />
            </div>
            
            <div class="story-text">
                <p class="story-paragraph">
                    Future Generation Nepal was established in 2019, but our history goes back much further in the areas of child protection, human rights and social development. Many of us worked as part of the team for the innovative United States INGO, Next Generation Nepal and its local partners.
                </p>
                
                <p class="story-paragraph">
                    Next Generation Nepal pioneered family reintegration from illegal child care homes in Nepal, as well as playing a pivotal role in the legal recognition of orphanage trafficking and the harm caused to children by orphanage voluntourism from the US State Department, Trafficking in Persons Report.
                </p>

                <div class="impact-numbers">
                    <div class="impact-grid">
                        <div class="impact-item">
                            <div class="impact-number">400+</div>
                            <div class="impact-text">Children Reunified with Families</div>
                        </div>
                        <div class="impact-item">
                            <div class="impact-number">700+</div>
                            <div class="impact-text">Children Reconnected</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './includes/footer.php'; ?>

    <script>
        // Simple scroll reveal animation
        function revealOnScroll() {
            const elements = document.querySelectorAll('.story-paragraph, .impact-numbers');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('animate-fadeInUp');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);
    </script>
</body>
</html>