<?php 
    require "connection.php";
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
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="content.css">
    <title>Oral Surgery - Zafreen Dental Clinic</title>
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

        <div class="content">
            <div class="content-title">
                <h1>Our Services</h1>
                <hr>
            </div>
            <div class="content-desc">
                <h1>Oral Surgery</h1>
                <img src="img/oral.jpg" />
                <p>The branch of dentistry that deals with problems or damage to the mouth, teeth, and jaw. Oral surgery is frequently used to extract wisdom teeth, prepare the mouth for dentures, and repair jaw problems. Oral Surgeons may also perform more advanced procedures as needed following trauma or severe disease damage to the mouth structure.
                <br><br>
                <b>Dental Implants</b> - a procedure that replaces missing or damaged teeth with artificial teeth that look and feel like the real ones. It uses metal screw-like posts to replace tooth roots.
                <br><br>
                <b>Bone Grafting</b> - When it comes to dental implants and surgery, there are numerous instances wherein the dentist has to perform a bone graft or the addition of bone amount in a patient's jaw. It is used to enhance the dental ridge to ensure the stability of the dental implant.
                <br><br>
                <b>Surgical Extraction</b> - Surgical extraction is needed when complications occur during a simple tooth extraction. In such cases, the dentist must give the patient general anesthesia. There are two common types of surgical extraction:
                <br><br>
                <b>Supernumerary Tooth Removal</b> - An adult's normal teeth structure is comprised of 32 teeth. In cases of supernumerary teeth, more than 32 teeth are present within the dental arch. The treatment and removal of this tooth would depend on its position and effect on nearby teeth.
                <br><br>
                <b>Deciduous Tooth Removal</b> - Deciduous teeth refer to "baby teeth" or the 20 teeth that began erupting from infancy to early childhood. In case the baby tooth does not shed on its own, dentists would have to remove it to facilitate the growth of permanent teeth.
                <br><br>
                <b>Odontectomy</b> - refers to the surgical removal of a tooth that is partially or totally embedded in the bone. Dentists will have to remove the bone that surrounds the teeth before they can force extraction. Sutures and stitches are often applied to facilitate faster recovery. The removal of third molars or wisdom teeth is a common example of odontectomy.
                <br><br>
                <b>Frenectomy</b> - refers to the removal of the frenum or the muscular attachment between tissues. The lingual frenum is the thin membrane that connects the back of the tongue with the floor of the mouth.
                <br><br>
                <b>Oral and Maxillofacial Surgery</b> - combines oral surgery with surgery on the structures of the face, sinuses, and neck.</p>
            </div>
        </div>

        <div class="appointment">
            <div class="appointment-form">
            <form action="appointment.php" method="POST" class="form">
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
                            <option value="Dental Implants">Dental Implants</option>
                            <option value="Bone Grafting">Bone Grafting</option>
                            <option value="Surgical Extraction">Surgical Extraction</option>
                            <option value="Supernumerary Tooth Removal">Supernumerary Tooth Removal</option>
                            <option value="Deciduous Tooth Remova">Deciduous Tooth Removal</option>
                            <option value="Odontectomy Odontectomy">Odontectomy</option>
                            <option value="Frenectomy Frenectomy">Frenectomy</option>
                            <option value="Oral and Maxillofacial Surgery">Oral and Maxillofacial Surgery</option>
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