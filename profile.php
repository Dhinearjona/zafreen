<?php 
include 'connection.php';
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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


    <div class="account">
        <div class="account-title">
            <h1>User Profile</h1>
        </div>
        <div class="account-desc">
            <form action="profile.php" method="POST">
            <?php 
                $query = "SELECT * FROM tblregister WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
                if($result = mysqli_query($conn, $query)) {

                    $row = mysqli_fetch_assoc($result);

                    echo "<div class='info'><strong>Fullname:</strong> <span>".$row['fullname']."</span></div>";
                    echo "<div class='info'><strong>Birthday:</strong> <span>".$row['birthday']."</span></div>";
                    echo "<div class='info'><strong>Gender:</strong> <span>".$row['gender']."</span></div>";
                    echo "<div class='info'><strong>Address:</strong> <span>".$row['address']."</span></div>";
                    echo "<div class='info'><strong>Phone Number:</strong> <span>".$row['phone']."</span></div>";
                    echo "<div class='info'><strong>Email Address:</strong> <span>".$row['email']."</span></div>";
                    echo "<div class='info'><strong>Username:</strong> <span>".$row['username']."</span></div>";
                    echo "<div class='info'><strong>Password:</strong> <span>".$row['password']."</span></div>";
                    echo "<div class='info'><strong>Account:</strong> <span>".$row['account']."</span></div>";
                    ?>
                    <br>
                    <?php

                    $row = mysqli_fetch_row($result);

                } else {

                    die("Error with the query in the database");

                }
            ?>
                </form>
            </div>
        </div>
    </div>


    <?php
        } else {
        header("location:index.php");
        exit;
        }
        unset($_SESSION['prompt']);
        mysqli_close($conn);
        ?>