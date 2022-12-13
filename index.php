<?php 

session_start();

if(!empty($_SESSION['username']))
{
    $username = $_SESSION['username'];
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
            <a href="index.php" class="logo"><img src="img/logo.png" /></a>

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="services.php">Services</a>
                <a href="appointment.php">Make an Appointment</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php" class="btnLogin">Login</a>
            </nav>
        </section>
    </header>

    <div class="cover" style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(./img/cover.jpg);">
        <div class="cover-desc">
            <h1>Welcome to Zafreen Dental Center</h1>
            <h3>Cosmetics and Orthondontics</h3>
            <p>Here to fix your teeth and give confidence with your smile.</p>
            <a href="contact.php">Get in Touch</a>
            <a href="appointment.php" class="btn2">Make an Appointment</a>
        </div>
    </div>

    <div class="choose">
        <div class="choose-desc">
            <h1>Why Choose Zafreen Dental Center</h1>
            <p>We provide a comprehensive range of general dentistry services as well as cosmetics treatment like invisalign (invisalign braces). tooth whitening, and oral hygiene services. We take the time to listen to you and promise to deliver our treatment in a gentle and comfortable manner. Our practice is built or customer satisfaction.</p>
        </div>
        <div class="choose-card">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <h2>Mission</h2>
                        <p>To provide the highest quality and affordable dental service to patient with compassionate care.</p>
                    </div>
                    <div class="card">
                        <h2>Vision</h2>
                        <p>To continuously help people to have new, education and research to established quality dental practice.</p>
                    </div>
                    <div class="card">
                        <h2>Values</h2>
                        <p>Providing trust expertise care and comfortable and friendly environment for our patients and staff members.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="gallery-img">
            <img src="img/img1.jpg" />
            <img src="img/img2.jpg" />
            <img src="img/img3.jpg" />
            <img src="img/img4.jpg" />
            <img src="img/img5.jpg" />
            <img src="img/img6.jpg" />
        </div>
    </div>

    <section class="footer">
        <div class="footer-desc">
            <div class="footer-about">
                <h1>Zafreen Dental Center</h1>
                <p>155 Urbano Velasco Ave. Pinagbuhatan, Pasig City</p>
            </div>
            <div class="footer-links">
                <h1>Working Hours</h1>
                <p>Monday - Sunday
                <br>9:00AM - 6:00PM</p>
            </div>
            <div class="footer-contact">
                <h1>Social Media</h1>
                <i class="fa-brands fa-facebook"></i><a href="#">Zafreen Dental Center</a><br>
                <i class="fa-solid fa-phone"></i><a href="#">09171334272 || 09437074760</a><br>
                <i class="fa-solid fa-envelope"></i><a href="#">zafreendentalcenter@gmail.com</a>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>