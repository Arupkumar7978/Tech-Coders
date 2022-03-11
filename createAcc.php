<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Programming School</title>


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
            <li><a href="./projects.php"><i class="fas fa-code"></i>Source Codes</a></li>
            <li><a href="./myaccount.php"><i class="fas fa-user-circle"></i>My Account</a></li>
            <li><a href="#"><i class="fas fa-phone-volume"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i>More</a></li>


            <div class="moblogout">
              <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </div>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <div>
    <?php
    if (!isset($_SESSION['name'])) {
    ?>
      <div class="loginbutton">
        <div class="frame">
          <a href="loginpage.php" id="mob"><button class="custom-btn btn-1" style="font-weight:bold;">Login In</button></a>
          <a href="login&signin.php" id="mob"><button class="custom-btn btn-1" style="font-weight:bold;">Sign Up</button></a>
        </div>
      </div>
    <?php
    } else {
    ?>
      <div class="loginbutton">
        <div class="frame">
          <button class="welcome"><?php echo "Welcome, " . $_SESSION['name']; ?></button>
          <a href="logout.php"><button class="logout" style="border-radius:30px;"><i class="fas fa-sign-out-alt"></i> Logout</button></a>

        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <section>
    <div class="tech">
      <h1>CREATE ACCOUNT</h1>
    </div>
  </section>

  <section>
    <div class="create">
      <div class="container">
        <div class="txt">
          <h1>Create An Account</h1>
          <h2>Hello Friend !</h2>
          <p>Enter your personal details and start journey with us .</p>
        </div>
        <form class="form" id="a-form" method="post" action="register.php">
          <div class="cen">
            <input type="text" placeholder="Enter Full Name" name="name" autocomplete="on" required>
            <span class="fas fa-user"></span>
          </div>
          <div class="cen">
            <input class="form__input" type="email" placeholder="Email" name="email" required>
            <span class="fas fa-envelope"></span>
          </div>
          <div class="cen">
            <input class="form__input" type="tell" placeholder="Phone Number" name="number" required>
            <span class="fas fa-mobile"></span>
          </div>
          <div class="cen">
            <input class="form__input" type="password" placeholder="Password" name="password" required>
            <span class="fas fa-lock"></span>
          </div>
          <div class="cen">
            <input class="form__input" type="text" placeholder="Profession" name="profession" required>
            <span class="fas fa-user-tie"></span>
          </div>
          <div class="cen">
            <button type="submit" value="Login">SIGN UP</button>
          </div>
        </form>
        <div class="cen">
          <p> Already have an Account ?</p>
          <p><a href="loginpage.php"> Login now</a></p>

        </div>


      </div>
    </div>
  </section>

</body>

</html>