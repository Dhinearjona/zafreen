<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
    $phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
    $password = md5($_POST['password']);
    $account = $_POST['account'];

	if ($password == $password) {
		$sql = "SELECT * FROM tblregister WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tblregister (fullname, birthday, gender, address, phone, email, username, password, account) VALUES ('$name', '$birthday', '$gender', '$address', '$phone', '$email', '$username', '$password', '$account')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
                $name = "";
                $birthday = "";
                $gender = "";
                $address = "";
                $phone = "";
                $email = "";
				$username = "";
				$password = "";
				$account = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
    <link rel="stylesheet" href="register.css">
    <title>Register - Zafreen Dental Clinic</title>
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
                <a href="login.php" class="btnLogin">Login</a>
            </nav>
        </section>
    </header>

    <div class="login">
        <div class="login-title">
            <h1>Zafreen Dental Center</h1>
            <p>Create your account by filling the form below</p>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" placeholder="Fullname" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="form-control" placeholder="Birthday" name="birthday" value="<?php echo $birthday; ?>" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="gender" value="<?php echo $gender; ?>" required>
                        <option selected>--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="form-control" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="form-control" placeholder="Email Address" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="account" value="<?php echo $account; ?>" required>
                        <option selected>--Select--</option>
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
                <a href="fpassword.php">Forgot Password</a> |
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>

</body>
</html>