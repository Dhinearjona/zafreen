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

    <div class="about">
        <div class="about-title">
            <h1>About Us</h1>
        </div>
        <div class="about-details">
            <div class="about-desc">
                <h3>Know more about zafreen dental center</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit explicabo quidem qui modi nobis earum est excepturi. Rem nisi eligendi modi dolore deleniti architecto tempore similique doloribus ex. Veritatis, perspiciatis.</p>
            </div>
            <div class="about-info">
                <h3>Clinic Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat totam officiis iusto placeat iste explicabo natus quam aperiam reiciendis eius minus minima esse ad facilis temporibus vel laudantium, quos nobis.</p>
            </div>
        </div>
    </div>

    <div class="about-card">
        <div class="about-title">
            <h1>Dentist</h1>
        </div>
        <div class="about-card-info">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                    <div class="card">
                        <img src="img/profile.png" />
                        <h1>John Doe</h1>
                        <p>Dentist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>