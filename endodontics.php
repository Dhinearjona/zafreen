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
    <title>Endodontics - Zafreen Dental Clinic</title>
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
                <h1>Endodontics</h1>
                <img src="img/endodontics.jpeg" />
                <p>Endodontics deals with the treatment of the inside of the tooth. Endodontic treatment is necessary when the soft tissue inside the root canal becomes infected or inflamed. If left untreated, this could cause pain or lead to an abscess which could result to the extraction of the tooth. By undergoing an endodontic treatment, the tooth is cleared from infection and protected from subsequent infections. Root canal treatment is one of the more common types of endodontic treatment.
                <br><br>
                <b>Apicoectomy</b> - During root canal treatment, your dentist cleans the canals using special instruments called files. Inflamed or infected tissue is removed. An apicoectomy may be needed when an infection develops or won't go away after root canal treatment or retreatment.
                <br><br>
                Root canals can be very complex, with many tiny branches off the main canal. Sometimes, even after root canal treatment, infected tissue can remain in these branches. This can possibly prevent healing or cause re-infection later. In an apicoectomy, the root tip, or apex, is removed along with the infected tissue. A filling is then placed to seal the end of the root.</p>
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