<?php
$pageTitle = "Meet Fgn Team";
$currentPage = "meet-fgn-team";  // This matches the navigation item
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Future Generation Nepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <style>
               .containers {
            
            margin: 0 auto;
           
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .team-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .card-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .card-position {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .card-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .expand-btn {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .expand-btn:hover {
            background: #2980b9;
        }

        .social-links {
            margin-top: 1rem;
            display: flex;
            gap: 1rem;
        }

        .social-link {
            color: #3498db;
            text-decoration: none;
        }

        .social-link:hover {
            color: #2980b9;
        }

        .expanded .card-description {
            max-height: 500px;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .card-image {
                height: 250px;
            }
        }
    </style>
</head>
<body>
<?php include './includes/header.php'; ?>
    <div class="containers">
        <h1>Our Team</h1>
        <div class="team-grid">
            <div class="team-card">
                <img src="/api/placeholder/300/300" alt="Samjyor Lama" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Samjyor Lama</h2>
                    <p class="card-position">Executive Director (Co-Founder)</p>
                    <p class="card-description">
                        Samjyor has experience rescuing and reintegrating over 500 trafficked and displaced children in Nepal. His dedication to child welfare has made a significant impact in the community.
                    </p>
                    <button class="expand-btn">Learn More</button>
                    <div class="social-links">
                        <a href="#" class="social-link">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img src="/api/placeholder/300/300" alt="Rupa Sitaula" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Rupa Sitaula</h2>
                    <p class="card-position">Project Director (Co-Founder)</p>
                    <p class="card-description">
                        In 2009, Rupa served as a volunteer at an orphanage in Nepal as a fundraiser for the organization. She has since dedicated her career to helping children in need.
                    </p>
                    <button class="expand-btn">Learn More</button>
                    <div class="social-links">
                        <a href="#" class="social-link">LinkedIn</a>
                    </div>
                </div>
            </div>

<div class="team-card">
                <img src="/api/placeholder/300/300" alt="Rupa Sitaula" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Rupa Sitaula</h2>
                    <p class="card-position">Project Director (Co-Founder)</p>
                    <p class="card-description">
                        In 2009, Rupa served as a volunteer at an orphanage in Nepal as a fundraiser for the organization. She has since dedicated her career to helping children in need.
                    </p>
                    <button class="expand-btn">Learn More</button>
                    <div class="social-links">
                        <a href="#" class="social-link">LinkedIn</a>
                    </div>
                </div>
            </div>

<div class="team-card">
                <img src="/api/placeholder/300/300" alt="Rupa Sitaula" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Rupa Sitaula</h2>
                    <p class="card-position">Project Director (Co-Founder)</p>
                    <p class="card-description">
                        In 2009, Rupa served as a volunteer at an orphanage in Nepal as a fundraiser for the organization. She has since dedicated her career to helping children in need.
                    </p>
                    <button class="expand-btn">Learn More</button>
                    <div class="social-links">
                        <a href="#" class="social-link">LinkedIn</a>
                    </div>
                </div>
            </div>


            <!-- Additional team members would follow the same pattern -->

        </div>
    </div>

    <script>
        document.querySelectorAll('.expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const card = button.closest('.team-card');
                card.classList.toggle('expanded');
                button.textContent = card.classList.contains('expanded') ? 'Show Less' : 'Learn More';
            });
        });
    </script>
</body>
</html>