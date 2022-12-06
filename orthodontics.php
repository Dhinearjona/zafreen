<?php 

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $rates = $_POST['rates'];
    $prefdentistry = $_POST['prefdentistry'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $services = $_POST['services'];

    $sql = "INSERT INTO `appointment` (`name`,`message`,`rates`,`prefdentistry`,`date`,`time`,`services`) VALUES ('$name','$message','$rates','$prefdentistry','$date','$time','$services')";
    if($query = $conn->query($sql)) {
        echo "<script>alert('Appointment Submitted Successfully.')</script>";
    }else{
        echo $conn->error;
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
    <link rel="stylesheet" href="contservices.css">
    <title>Orthodontics - Zafreen Dental Clinic</title>
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
                    <div class="welcome" style="text-align: center; margin: 0 5rem;"><?php echo "<h1 style='font-size: var(--p); text-align: center; margin-bottom: 0;' margin-left: 2rem;>Welcome</h1> " . "<a href='profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div>
                    <div class="logout">
                        <a href="logout.php">Logout</a>
                    </div>
                </nav>
            </section>
        </header>

        <div class="content">
            <div class="content-title">
                <h1>Our Services</h1>
                <hr>
            </div>
            <div class="content-desc">
                <h1>Orthodontics</h1>
                <img src="img/orthodontics.png" />
                <p>A winning smile is best complemented by straight, beautiful teeth. Orthodontics is a branch of dentistry that specializes in this by overseeing the diagnosis, supervision, guidance, and correction of problems involving the alignment of the teeth and jaws. The most common type of orthodontic treatment is the application of braces and retainers.
                <br><br>
                <b>Metal braces/Traditional braces</b> - They are made from high-grade stainless steel and have metal brackets that are attached to each tooth using a type of cement. The brackets are linked to each other with a thin archwire, which puts pressure on the teeth to cause them to move slowly into the correct position.
                <br><br>
                <b>Ceramic Braces</b> - Ceramic braces are the same size and shape as metal braces, except that they have tooth-colored or clear brackets that blend into teeth. Some even use tooth-colored wires to be even less noticeable.
                <br><br>
                <b>Lingual Braces</b> - Lingual braces are the same as traditional metal braces, except that the brackets and wires are placed on the inside of teeth.
                <br><br>
                <b>Invisalign</b> - Invisalign consists of a series of 18 to 30 custom-made, mouth-guard-like clear plastic aligners. The aligners are removable and are replaced every 2 weeks.</p>
            </div>
        </div>

        <div class="appointment">
            <div class="appointment-form">
            <form action="oralsurgery.php" method="POST" class="form">
                    <h1>Set an Appointment</h1>
                    <div class="mb-3">
                            <label for="name">Fullname:</label>
                            <input type="text" class="form-control" id="form-control" placeholder="Fullname" name="name" required>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                            <label for="floatingTextarea2">Message:</label>
                        </div>
                        <label for="services">Rate(1-5):</label>
                        <select class="form-select" aria-label="Default select example" name="rates">
                            <option selected>Rate Me</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="services">Preferred Dentistry:</label>
                        <select class="form-select" aria-label="Default select example" name="prefdentistry">
                            <option selected>Preferred Dentistry</option>
                            <option value="Dr. Haslaine P. Caunda">Dr. Haslaine P. Caunda</option>
                            <option value="Dr. Ashylle Anne Dime">Dr. Ashylle Anne Dime</option>
                            <option value="Dr. Jamvit Cajaban">Dr. Jamvit Cajaban</option>
                            <option value="Dr. Joezette Talaue">Dr. Joezette Talaue</option>
                        </select>
                        <div class="mb-3">
                            <label for="date">Preferred Date:</label>
                            <input type="date" class="form-control" id="form-control" placeholder="Preferred Date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="time">Preferred Time:</label>
                            <input type="time" class="form-control" id="form-control" placeholder="Preferred Time" name="time" required>
                        </div>
                        <label for="services">Services:</label>
                        <select class="form-select" aria-label="Default select example" name="services">
                            <option selected>Preferred Services</option>
                            <option value="Metal braces/Traditional braces">Metal braces/Traditional braces</option>
                            <option value="Ceramic Braces">Ceramic Braces</option>
                            <option value="Lingual Braces">Lingual Braces</option>
                            <option value="Invisalign">Invisalign</option>
                        </select>
                    <div>
                        <button type="submit" class="btn" name="submit">Submit an Appointment</button>
                    </div>
                </form>
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
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })

    </script>
</body>
</html>