<?php 

include 'connection.php';
error_reporting(0);
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="dash-profile.css">
    <title>Profile | Zafreen Dental Clinic</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name"><a href="dashboard.php"><img src="img/logo.png" /></a></span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dash-receptionist.php">
                    <i class="fa-solid fa-life-ring"></i>
                    <span class="links_name">Receptionist</span>
                </a>
            </li>
            <li>
                <a href="dash-dentist.php">
                    <i class='bx bx-plus-medical'></i>
                    <span class="links_name">Dentist</span>
                </a>
            </li>
            <li>
                <a href="dash-staff.php">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span class="links_name">Staff</span>
                </a>
            </li>
            <li>
                <a href="dash-patient.php">
                    <i class="fa-solid fa-hospital-user"></i>
                    <span class="links_name">Patient</span>
                </a>
            </li>
            <li>
                <a href="dash-schedule.php">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="links_name">schedule</span>
                </a>
            </li>
            <li>
                <a href="dash-appointment.php">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="links_name">Appointment List</span>
                </a>
            </li>
            <li>
                <a href="dash-profile.php" class="active">
                    <i class="fa-solid fa-user"></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li class="log_out">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Profile</span>
            </div>
            <div class="profile-details">
                <i class="fa-solid fa-user"></i>
                <span class="admin_name"><div class="welcome" style="margin-left: 1rem;"><?php echo "<a href='dash-profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div></span>
            </div>
        </nav>

        <div class="account">
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
    </section>