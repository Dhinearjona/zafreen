<?php 

  session_start();

  require 'connection.php';
  require 'function.php';

  if(isset($_POST['update'])) {

    $name = clean($_POST['name']);
    $birthday = clean($_POST['birthday']);
    $gender = clean($_POST['gender']);
    $address = clean($_POST['address']);
    $phone = clean($_POST['phone']);
    $username = clean($_POST['username']);
    $password = clean($_POST['coupasswordrse']);
    $account = clean($_POST['account']);

    $query = "UPDATE students SET firstname = '$fname', lastname = '$lname', course = '$course', yrlevel = '$yrlevel'
    WHERE id='".$_SESSION['userid']."'";

    if($result = mysqli_query($con, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:profile.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Profile - Student Information System</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

  <section>
    
    <div class="container">
      <strong class="title">Edit Profile</strong>
    </div>
    

    <div class="edit-form box-left clearfix">
      <form action="editprofile.php" method="POST">

        <div class="form-group">
          <label>Student No:</label>
          
          <?php 
            $query = "SELECT userid FROM tblregister WHERE id = '".$_SESSION['userid']."'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result);
          ?>
        </div>
        <div class="form-group">
          <label for="fullname">Fullname</label>
          <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
        </div>


        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
        </div>


        <div class="form-group">
          <label for="course">Course</label>

          <select class="form-control" name="course">
              <option value="BSBA">BSBA</option>
              <option value="BSOA">BSOA</option>
              <option value="BSIT">BSIT</option>
              <option value="BSCS">BSCS</option>
              <option value="BSCE">BSCE</option>
              
            </select>

        </div>


        <div class="form-group">
          <label for="yrlevel">Year Level</label>

          <select class="form-control" name="yrlevel">
            <option>1st year</option>
            <option>2nd year</option>
            <option>3rd year</option>
            <option>4th year</option>
          </select>

        </div>
        
        <div class="form-footer">
          <a href="profile.php">Go back</a>
          <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
        </div>
        

      </form>
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:profile.php");
  }

  mysqli_close($conn);

?>