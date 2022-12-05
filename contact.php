<?php
    @include 'connection.php';

    session_start();

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }

        if(isset($_POST['submit'])) {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $query = "insert into contact(name,email,subject,message) values ('$name','$email','$subject','$message')";
            $run = mysqli_query($conn, $query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form Submitted Successfully")</script>';
            } else {
                echo '<script>alert("Form not Submitted")</script>';
            }
        }
        else {
            echo '<script>alert("all fields required")</script>';
        }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us - Zafreen Dental Clinic</title>
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

    <div class="contact">
        <div class="contact-title">
            <h1>Contact Us</h1>
            <p>Consult with our team online by filling out the form below. If you have specific inquiries regarding our services, please don't hesitate to get in touch. We will respond as soon as possible.</p>
        </div>
        <div class="contact-flex">
            <div class="contact-side">
                <div class="contact-quote">
                    <h1>Get a Quote</h1>
                    <p>Fill up the form and our Team will get back<br>to you within 24 hours.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.4422630017443!2d121.09057842918516!3d14.555195299364462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7468aaa48c5%3A0x928a2fd1f18b360!2sZafreen%20Dental%20Center!5e0!3m2!1sen!2sph!4v1670051360463!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact-info">
                        <i class="fa-solid fa-phone"></i>+639171334272 | +639437074768<br>
                        <i class="fa-solid fa-envelope"></i>zafreendentalcenter@gmail.com<br>
                        <i class="fa-solid fa-location-dot"></i>155 Urbano Velasco ave. Pinagbuhatan Pasig, City
                    </div>
                    <div class="social-media">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="contact.php" method="POST" class="form">
                    <h1>Get In Touch</h1>
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn" name="submit">Send Message!</button>
                    </div>
                </form>
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