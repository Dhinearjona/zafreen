<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="style.css">
    <title>Home - Zafreen Dental Clinic</title>
</head>
<body>
    <div class="head">
        <div class="head-desc">
            <p>Emergency Cases: 1-800-700-6200</p>
        </div>
        <div class="head-social">
            <p>Follow us on:</p>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>

    <header class="header">
        <section class="flex">
            <a href="index.html" class="logo"><img src="img/logo.png" /></a>

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="services.php">Services</a>
                <a href="appoint.php">Make an Appointment</a>
                <a href="contact.php">Contact Us</a>
                <div class="welcome" style="text-align: center; margin: 0 5rem;"><?php echo "<h1 style='font-size: var(--p); text-align: center; margin-bottom: 0;' margin-left: 2rem;>Welcome</h1> " . "<a href='profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
        </section>
    </header>

    <div class="cover">
        <div class="cover-desc">
            <h1>Welcome to Zafreen Dental Center</h1>
            <p>Here to fix your teeth and give confidence with your smile.</p>
            <a href="contact.html">Get in Touch</a>
            <a href="appoint.html" class="btn2">Make an Appointment</a>
        </div>
    </div>

    <section class="footer">
        <div class="footer-desc">
            <div class="footer-about">
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore labore distinctio in veniam ut voluptatem reiciendis ab quibusdam, amet, error porro, debitis nobis. Modi ex aut pariatur tempora dolores vel.</span>
            <div class="footer-links">
                <h4>Agciotech</h4>
                <hr>
                <a href="index.html">Home</a>
                <a href="services.html">Services</a>
                <a href="news.html">News</a>
                <a href="connection.php">Contact Us</a>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <hr>
                <p>+639055444434</p>
                <p>info@agciotech.com</p>
                <p>201 General Mc Arthur Avenue, Cubao, Quezon City, Metro Manila</p>
            </div>
        </div>
        <div class="foot">
            <p>Copyright © 2022 <b>AGCIOTECH IT SERVICES</b> All Rights Reserved. Proudly Created by: <a href="https://www.facebook.com/Dhinedevs" target="_blank">Frank Devs</a></p>
            <div class="social">
                <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>