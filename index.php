<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Wardrobe - Yadarsan Yogeswaran</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <!-- Navigation -->
    <header>
        <nav>
            <div class="logo">
                <h1>Digital Wardrobe</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h2>Welcome to Digital Wardrobe</h2>
            <p>Your one-stop solution for stunning digital designs and marketing.</p>
            <a href="#contact" class="cta-button">Get In Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Hi, I’m Yadarsan Yogeswaran, a digital designer specializing in creating impactful flyers, posters, and comprehensive digital marketing strategies. With expertise in social media management, 3D animation, video editing, and more, I help businesses shine online and offline.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>My Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <img src="images/flyer-poster.jpg" alt="Flyers & Posters">
                    <h3>Flyers & Posters</h3>
                    <p>Professional design solutions for all your promotional needs.</p>
                </div>
                <div class="service-item">
                    <img src="images/social-media.jpg" alt="Social Media Management">
                    <h3>Social Media Management</h3>
                    <p>Engaging content and strategic management for your social media channels.</p>
                </div>
                <div class="service-item">
                    <img src="images/marketing.jpg" alt="Digital Marketing">
                    <h3>Digital Marketing</h3>
                    <p>Tailored marketing strategies to boost your online presence.</p>
                </div>
                <div class="service-item">
                    <img src="images/animation.jpg" alt="3D Animation">
                    <h3>3D Animation</h3>
                    <p>Eye-catching animations to bring your ideas to life.</p>
                </div>
                <div class="service-item">
                    <img src="images/video-editing.jpg" alt="Video Editing">
                    <h3>Video Editing</h3>
                    <p>High-quality video editing to enhance your visual content.</p>
                </div>
                <div class="service-item">
                    <img src="images/photo-editing.jpg" alt="Photo Editing">
                    <h3>Photo Editing</h3>
                    <p>Expert photo editing to ensure your images look their best.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <div class="portfolio-gallery">
                <div class="portfolio-item">
                    <img src="images/portfolio1.jpg" alt="Project 1">
                </div>
                <div class="portfolio-item">
                    <img src="images/portfolio2.jpg" alt="Project 2">
                </div>
                <div class="portfolio-item">
                    <img src="images/portfolio3.jpg" alt="Project 3">
                </div>
                <!-- Add more portfolio items as needed -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form action="contact.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="cta-button">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Digital Wardrobe. All rights reserved.</p>
            <p>Designed by Yadarsan Yogeswaran</p>
        </div>
    </footer>
</body>
</html>
