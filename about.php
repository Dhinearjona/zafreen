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
    <link rel="stylesheet" href="about.css">
    <title>About Us - Zafreen Dental Clinic</title>
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
                <a href="about.php">About Us</a>
                <a href="services.php">Services</a>
                <a href="appointment.php">Make an Appointment</a>
                <a href="contact.php">Contact Us</a>
                <div class="welcome" style="text-align: center; margin: 0 5rem;"><?php echo "<h1 style='font-size: var(--p); text-align: center; margin-bottom: 0;' margin-left: 2rem;>Welcome</h1> " . "<a href='profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
        </section>
    </header>

    <div class="about">
        <div class="about-title">
            <h1>About Us</h1>
            <h3>Know more about zafreen dental center</h3>
        </div>
        <div class="about-details">
            <div class="about-desc">
                <img src="img/store.jpg" />
            </div>
            <div class="about-info">
                <h1>Clinic Information</h1>
                <p>We are a dental clinic located in Pasig, City. We have been established since January 2022. Our other branches are also located in Pampanga. We offer top quality dental services and help our patients commit to a lifetime of oral health. We are open from Monday-Sunday and working hours starts from 9:00AM - 6:00PM even holidays.</p>
            </div>
        </div>
    </div>

    <div class="about-card">
        <div class="about-title">
            <h1>Dentist</h1>
        </div>
        <div class="about-card-info">
            <div class="row">
            <h1>Our Dentist</h1>
                <div class="column">
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Dr. Haslaine P. Caunda</h1>
                        <p>Owner/Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Dr. Ashylle Anne Dime</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Dr. Jamvit Cajaban</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Dr. Joezette Talaue</h1>
                        <p>Dentist</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <h1>Staff Members</h1>
                <div class="column">
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Mohammad Jisham Saripada</h1>
                        <p>Receptionist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Maria Cristina Almario</h1>
                        <p>Dental Assistant</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Jessa Mae Gasita</h1>
                        <p>Receptionist/Dental Assistant</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>Rhancel Dela Vega</h1>
                        <p>Receptionist</p>
                    </div>
                </div>
            </div>
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