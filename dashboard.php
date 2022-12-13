<?php 

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
    <link rel="stylesheet" href="dashboard.css">
    <title>Receptionist Dashboad | Zafreen Dental Clinic</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name"><a href="dashboard.php"><img src="img/logo.png" /></a></span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php" class="active">
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
                <a href="dash-profile.php">
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
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class="fa-solid fa-user"></i>
                <span class="admin_name"><div class="welcome" style="margin-left: 1rem;"><?php echo "<a href='dash-profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div></span>
            </div>
        </nav>
    </section>