<?php 

    include 'connection.php';
    error_reporting(0);
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql="SELECT * FROM tblregister WHERE username='".$username."' AND password='".$password."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($row["account"]=="User")
        {	
            $_SESSION["username"]=$username;
            header("location:index.php");
        }
    
        elseif($row["account"]=="Admin")
        {
            $_SESSION["username"]=$username;
            header("location:dashboard.php");
        }

        else
        {
            echo "<script>alert('Username or Password incorrect');</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="login.css">
    <title>Login - Zafreen Dental Clinic</title>
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

    <div class="login">
        <div class="login-title">
            <h1>Zafreen Dental Center</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>

</body>
</html>