<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>TC - MY ACCOUNT</title>


  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
  <!-- GOOGLE FONTS -->

  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS LINK -->
  <link rel="stylesheet" href="styles.css">
  <!-- CSS LINK -->

  <!-- ICONS LINK -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/79ee746da7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
  <div class="navbar">
    <input type="checkbox" id="check">
    <label class="button bars" for="check"><i class="fas fa-bars"></i></label>
    <div class="side_bar">
      <div class="title">
        <div class="logo">Menu</div>
        <label class=" button cancel" for="check"><i class="fas fa-times"></i></label>
      </div>
      <div class="section">
        <?php
        if (!isset($_SESSION['name'])) {
        ?>
          <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#aboutus"><i class="fas fa-users"></i>About us</a></li>
            <li><a href="course.php"><i class="fas fa-laptop"></i> Course</a></li>
            <li><a href="#"><i class="fas fa-graduation-cap"></i>Certifications</a></li>
            <li><a href="./projects.php"><i class="fas fa-code"></i>Source Codes</a></li>
            <li><a href="#"><i class="fas fa-phone-volume"></i>Contact</a></li>
            <li id="more"><a href="#"><i class="fas fa-info-circle"></i>More</a></li>
            <div class="view">
              <h3>Log In To View page Contents ❤️ </h3>
            </div>
            <li><a class="tab" href="./loginpage.php"><i class="fas fa-user-circle"></i>LOG IN</a></li>
            <li><a class="tab" href="./loginpage.php"><i class="fas fa-user-plus"></i>Create An Account</a></li>


          </ul>
        <?php
        } else {
        ?>
          <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#aboutus"><i class="fas fa-users"></i>About us</a></li>
            <li><a href="course.php"><i class="fas fa-laptop"></i> Course</a></li>
            <li><a href="#"><i class="fas fa-graduation-cap"></i>Certifications</a></li>
            <li><a href="./projects.php"><i class="fas fa-code"></i>Source Codes</a></li>
            <li><a href="./myaccount.php"><i class="fas fa-user-circle"></i>My Account</a></li>
            <li><a href="#"><i class="fas fa-phone-volume"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i>More</a></li>


            <div class="moblogout">
              <li style="margin-top: 135px;"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </div>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <div>
    <section>
      <div class="tech">
        <h1>MY PROFILE</h1>
      </div>
    </section>

    <section class="profile">
      <div class="container">
        <img src="./img/avatar.png" alt="ProfilePhoto">

        <h1><a id="mob" href="#"><?php echo "" . $_SESSION['name']; ?></a></h1>
        <h2><a id="mob" href="#"><?php echo " " . $_SESSION['profession']; ?></a></h2>
        <h3><a id="mob" href="#"><?php echo "E-mail : " . $_SESSION['email']; ?></a></h3>
        <h3><a id="mob" href="#"><?php echo "Phone No : " . $_SESSION['number']; ?></a></h3>

      </div>
    </section>
    <section>
      <div class="passchange">
        <div class="container">
          <h3>Change Your Password</h3>
          <div class="centre">
            <input type="password" placeholder="Enter Old Password" name="oldpass" required>
          </div>
          <div class="centre2">
            <input type="password" placeholder="Enter New Password" name="newpass" required>
          </div>
          <button type="submit">Update</button>
        </div>
      </div>
    </section>
</body>

</html>