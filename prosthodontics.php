<?php 

session_start();

if(!empty($_SESSION['username']))
{
    $username = $_SESSION['username'];
}

// if(isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $message = $_POST['message'];
//     $rates = $_POST['rates'];
//     $prefdentistry = $_POST['prefdentistry'];
//     $date = $_POST['date'];
//     $time = $_POST['time'];
//     $services = $_POST['services'];

//     $sql = "INSERT INTO `appointment` (`name`,`message`,`rates`,`prefdentistry`,`date`,`time`,`services`) VALUES ('$name','$message','$rates','$prefdentistry','$date','$time','$services')";
//     if($query = $conn->query($sql)) {
//         echo "<script>alert('Appointment Submitted Successfully.')</script>";
//     }else{
//         echo $conn->error;
//     }
// }

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
    <link rel="stylesheet" href="contservices.css">
    <title>Prosthodontics - Zafreen Dental Clinic</title>
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

        <div class="content">
            <div class="content-title">
                <h1>Our Services</h1>
                <hr>
            </div>
            <div class="content-desc">
                <h1>Prosthodontics</h1>
                <img src="img/prosthodontics.png" />
                <p>This area of dentistry specializes in the diagnosis, treatment planning, rehabilitation, and maintenance of the oral function, comfort, appearance, and health of patients with clinical conditions associated with missing or deficient teeth and/or oral and maxillofacial tissues using biocompatible substitutes.
                <br><br>
                <b>Dental Crown</b> - generally used to replace a single missing tooth. It could also cover a tooth to improve its appearance and restore shape, size, and strength.
                <br><br>
                <b>Bridge</b> - a type of dental restoration used to replace a missing tooth by joining it permanently to adjacent teeth or Dental Crown. It works well for areas that have two or more missing teeth.
                <br><br>
                <b>Dentures</b> - can be full or partial. They are used to replace missing teeth. They could be permanent, which requires professional help to be removed, or removable, which allows patients to remove them with ease.
                <br><br>
                <b>Dental Veneers</b> - are used to cover the front teeth to change their color or shape. They can cover chipped, discolored, oddly shaped, unevenly placed, or crooked teeth, as well as those with uneven surfaces. Veneers use thin pieces of porcelain or plastic that are bonded with the teeth to produce aesthetically pleasing results.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>