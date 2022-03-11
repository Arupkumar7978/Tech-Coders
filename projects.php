<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>TC - SOURCE CODE</title>


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
    <section>
      <div class="tech">
        <h1>SOURCE CODE</h1>
      </div>
    </section>
    <?php
    if (!isset($_SESSION['name'])) {
    ?>
    <?php
    } else {
    ?>
      <section>
        <div class="mobwel">
          <h1><a id="mob" href="#"><?php echo "Let's Go 😎 " . $_SESSION['name']; ?></a></h1>
        </div>
      </section>
    <?php
    }
    ?>

    <section>

      <div class="projects">
        <div class="container">
          <div class="clanguage">
            <img src="./img/C-programming.png" alt="">
            <p>C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system.</p>
            <a href="chome.php"><button class="mybtn">Lets Go</button></a>
          </div>
        </div>
        <div class="container">
          <div class="java">
            <img src="./img/java.png" alt="">
            <p>Java is a high-level, class-based, object oriented programming language that is designed to have as few implementation dependencies as possible.</p>
            <button class="mybtn">Lets Go</button>
          </div>
        </div>
        <div class="container">
          <div class="python">
            <img src="./img/p.png" alt="">
            <p>C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system.</p>
            <button class="mybtn">Lets Go</button>
          </div>
        </div>
      </div>
    </section>

</body>

</html>