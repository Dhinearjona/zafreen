<?php 

include 'connection.php';
error_reporting(0);
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM tblregister WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fullname = $row['fullname'];
$birthday = $row['birthday'];
$gender = $row['gender'];
$address = $row['address'];
$phone = $row['phone'];
$email = $row['email'];
$username = $row['username'];
$password = $row['password'];
$account = $row['account'];

if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $account = $_POST['account'];

    $sql = "UPDATE tblregister SET id = '$id', fullname = '$fullname', birthday = '$birthday', gender = '$gender', address = '$address', phone = '$phone', email = '$email', username = '$username', password = '$password', account = '$account' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    
    if($result)
    {
        echo "<script>alert('Updated Successfully')</script>";
        // header('Location: edit_profile.php');
    } else
    {
        die(mysqli_error($conn));
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
        <form action="edit_profile.php" method="POST">
        <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="name" style="display: none;" value="<?php echo $id ?>" disabled>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="name" value="<?php echo $row['fullname']; ?>">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="form-control" name="birthday" value="<?php echo $row['birthday']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="gender" value="<?php echo $row['gender']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="address" value="<?php echo $row['address']; ?>">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="form-control" name="email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="username" value="<?php echo $row['username']; ?>">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="form-control" name="password" value="<?php echo $row['password']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" name="account" value="<?php echo $row['account']; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update</button><br>
                <a href="profile.php">Back</a>
            </form>
        </div>
    </div>
</div>