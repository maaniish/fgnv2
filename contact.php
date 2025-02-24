<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
                .contact-page {
                    font-family: 'Inter', sans-serif;
                    background-image: url('images/gallery/header_background.jpg');
                }

                .contact-container {
                    width: 100%;
                    max-width: 1200px;
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 20px;
                    padding: 20px;
                    margin: 0 auto;
                }

                .contact-info-card {
            background: rgba(204, 199, 178, 0.2);  /* #ccc7b2 with transparency */
            backdrop-filter: blur(8px);
            padding: 30px;
            border-radius: 20px;
            color: white;
            border: 1px solid rgba(204, 199, 178, 0.3);  /* Subtle border using same color */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .contact-info-card h2 {
            font-size: 2em;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin: 30px 0;
            transition: transform 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateX(10px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .contact-icon i {
            font-size: 20px;
            color: #6b48ff;
        }

        .contact-form-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .contact-form-card h2 {
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .contact-form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .contact-form-group input,
        .contact-form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .contact-form-group label {
            position: absolute;
            left: 15px;
            top: 15px;
            color: #999;
            transition: all 0.3s ease;
            pointer-events: none;
            font-weight: 500;
        }

        .contact-form-group input:focus,
        .contact-form-group textarea:focus {
            border-color: #6b48ff;
            outline: none;
        }

        .contact-form-group input:focus + label,
        .contact-form-group input:not(:placeholder-shown) + label,
        .contact-form-group textarea:focus + label,
        .contact-form-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            background: white;
            padding: 0 5px;
            font-size: 14px;
            color: #6b48ff;
        }

        .contact-submit-btn {
            background: #6b48ff;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .contact-submit-btn:hover {
            background: #8f6aff;
            transform: translateY(-2px);
        }

        .contact-success-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .contact-success-overlay.active {
            display: flex;
            opacity: 1;
        }

        .contact-success-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #4CAF50;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            transform: scale(0);
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .contact-success-overlay.active .contact-success-icon {
            transform: scale(1);
        }

        .contact-success-icon i {
            color: white;
            font-size: 40px;
        }

        .contact-success-text {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease 0.3s;
        }

        .contact-success-subtext {
            color: #666;
            font-size: 16px;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease 0.4s;
        }

        .contact-success-overlay.active .contact-success-text,
        .contact-success-overlay.active .contact-success-subtext {
            opacity: 1;
            transform: translateY(0);
        }

        .contact-loading-spinner {
            display: none;
            width: 24px;
            height: 24px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: contactSpin 1s linear infinite;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes contactSpin {
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .contact-submit-btn.loading .contact-button-text {
            opacity: 0;
        }

        .contact-submit-btn.loading .contact-loading-spinner {
            display: block;
        }

        .contact-return-btn {
            background: #4CAF50;
            margin-top: 20px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease 0.5s;
        }

        .contact-success-overlay.active .contact-return-btn {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .contact-info-card,
            .contact-form-card {
                padding: 20px;
            }
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="contact-page">
    <?php include './includes/header.php'; ?>
    <div class="contact-container">
        <div class="contact-info-card animate__animated animate__fadeInLeft">
            <h2>Get in Touch</h2>
            <p>We'd love to hear from you. Feel free to reach out using any of the following methods:</p>
            
            <div class="contact-info-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <h3>Address</h3>
                    <p>Budanilkantha, Kathmandu</p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+977 01-446225</p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <h3>Email</h3>
                    <p>fgn@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="contact-form-card animate__animated animate__fadeInRight">
            <h2>Send us a Message</h2>
            <form id="contactForm">
                <div class="contact-form-group">
                    <input type="text" id="name" placeholder=" " required>
                    <label for="name">Your Name</label>
                </div>

                <div class="contact-form-group">
                    <input type="email" id="email" placeholder=" " required>
                    <label for="email">Your Email</label>
                </div>

                <div class="contact-form-group">
                    <input type="text" id="subject" placeholder=" " required>
                    <label for="subject">Subject</label>
                </div>

                <div class="contact-form-group">
                    <textarea id="message" rows="5" placeholder=" " required></textarea>
                    <label for="message">Your Message</label>
                </div>

                <button type="submit" class="contact-submit-btn">
                    <span class="contact-button-text">Send Message</span>
                    <div class="contact-loading-spinner"></div>
                </button>
            </form>

            <div class="contact-success-overlay">
                <div class="contact-success-icon">
                    <i class="fas fa-check"></i>
                </div>
                <div class="contact-success-text">Message Sent!</div>
                <div class="contact-success-subtext">Thank you for reaching out. We'll get back to you within 24 hours.</div>
                <button class="contact-submit-btn contact-return-btn" onclick="resetContactForm()">Send Another Message</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const button = this.querySelector('.contact-submit-btn');
            const form = this;
            const successOverlay = document.querySelector('.contact-success-overlay');

            button.classList.add('loading');

            setTimeout(() => {
                button.classList.remove('loading');
                successOverlay.classList.add('active');
                form.reset();
            }, 2000);
        });

        function resetContactForm() {
            const successOverlay = document.querySelector('.contact-success-overlay');
            successOverlay.classList.remove('active');
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated');
                    entry.target.classList.add(entry.target.dataset.animation);
                }
            });
        });

        document.querySelectorAll('.animate__animated').forEach((el) => observer.observe(el));
    </script>
</body>
</html>