<?php
$pageTitle = "Our Values";
$currentPage = "our-values";  // This matches the navigation item
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Layout</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <style>
        /* Reset default margins and set font */
body {
    background-color: #f5f5dc; /* beige */
   
    margin: 0;
    padding: 0;
}

/* Center the content with max width */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Vision and Mission Section */
.vision-mission {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
}

.vision, .mission {
    width: 48%;
}

.vision h2, .mission h2, .values h2 {
    background-color: #0077B6;
    color: white;
    padding: 10px;
    text-align: center;
    margin-bottom: 10px;
}

.description, .value {
    background-color: white;
    border: 2px solid #0077B6;
    padding: 20px;
    text-align: center;
}

/* Values Section */
.values h2 {
    margin-bottom: 20px;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.value h3 {
    margin-bottom: 10px;
}

/* Contact Us Button */
.contact-us {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #0077B6;
    color: white;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    font-size: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .vision-mission {
        flex-direction: column;
    }
    .vision, .mission {
        width: 100%;
        margin-bottom: 20px;
    }
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .values-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</head>
<body>
<?php include './includes/header.php'; ?>
    <div class="container">
        <!-- Vision and Mission Section -->
        <div class="vision-mission">
            <div class="vision">
                <h2>Vision</h2>
                <div class="description">
                    We envision a healthy, happy, and prosperous society that offers a secure life for future generations.
                </div>
            </div>
            <div class="mission">
                <h2>Mission</h2>
                <div class="description">
                    Our mission is to protect vulnerable children and women and combat child trafficking and prevent family separations.
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="values">
            <h2>Values</h2>
            <div class="values-grid">
                <div class="value">
                    <h3>Transparency</h3>
                    <p>Transparency is paramount to the work we do and how we accomplish it. We keep our partners fully updated on the work of our programs and finances so they can be confident we are delivering to their expectations.</p>
                </div>
                <div class="value">
                    <h3>Integrity</h3>
                    <p>FGN has a very strong commitment to mutual trust between ourselves and our partners.</p>
                </div>
                <div class="value">
                    <h3>Respect</h3>
                    <p>FGN respects the rights of every human being regardless of caste, ethnic group, gender/sexual orientation, age, ancestry origin, physical abilities or marital status.</p>
                </div>
                <div class="value">
                    <h3>Compassion</h3>
                    <p>FGN will share the story of our beneficiaries, who have granted us permission to do so, by ensuring they are represented with compassion and dignity.</p>
                </div>
                <div class="value">
                    <h3>Empowerment</h3>
                    <p>Young people are the future and our hope, all possible efforts are directed to empowering them by encouraging and enabling the youth to become proud and responsible citizens.</p>
                </div>
                <div class="value">
                    <h3>Sustainability</h3>
                    <p>FGN works towards bringing sustainable results for creating a better future for the future generation of Nepal.</p>
                </div>
            </div>
        </div>

        <!-- Contact Us Button -->
        <button class="contact-us">Contact us</button>
    </div>
    <script>
        // Select the Contact us button
const contactButton = document.querySelector('.contact-us');

// Add hover effect: darken the background on mouseover
contactButton.addEventListener('mouseover', () => {
    contactButton.style.backgroundColor = '#005f8d'; // darker blue
});

// Revert to original color on mouseout
contactButton.addEventListener('mouseout', () => {
    contactButton.style.backgroundColor = '#0077B6';
});
    </script>
</body>
</html>