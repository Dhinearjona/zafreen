<?php 

include 'connection.php';
error_reporting(0);
session_start();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="profile.css">
    <title>Profile - Zafreen Dental Clinic</title>
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


    <div class="account">
        <div class="account-title">
            <h1>User Profile</h1>
        </div>
        <div class="account-desc">
        <form action="profile.php" method="POST">
            <?php
                $username = $_SESSION['username'];
                $query = "SELECT * FROM tblregister WHERE username='$username'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) 
                {
                    foreach($query_run as $row)
                    {
            ?>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="name" style="display:none;" value="<?php echo $row['id']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="name" value="<?php echo $row['fullname']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="form-control" name="birthday" value="<?php echo $row['birthday']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="gender" value="<?php echo $row['gender']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="address" value="<?php echo $row['address']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="form-control" name="phone" value="<?php echo $row['phone']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="form-control" name="email" value="<?php echo $row['email']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="username" value="<?php echo $row['username']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="form-control" name="password" value="<?php echo $row['password']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="account" value="<?php echo $row['account']; ?>" disabled>
                </div>
            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>