<?php
include('dbconn.php');

if(isset($_SESSION['access_token'])){
  header('Location:index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="https://kit.fontawesome.com/79ee746da7.js" crossorigin="anonymous"></script>
    <title>Create a New Account !</title>
</head>
<body>
    <div class="main">
        <div class="container a-container" id="a-container">
          <form class="form" id="a-form" method="post" action="register.php">
            <h2 class="form_title title">Create Account</h2>
   
            <div class="form__icons">
            <i class="fab fa-google" onclick="window.location='<?php echo $loginURL?>';" name="google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            </div>
              <span class="form__span">or use email for registration</span>
   
            <input class="form__input" type="text" placeholder="Full Name" name="name" autocomplete="on" required>
            <input class="form__input" type="text" placeholder="Email"  name="email" required>
            <input class="form__input" type="text" placeholder="Phone Number" name="number" required>
            <input class="form__input" type="password" placeholder="Password"  name="password" required>
            <input class="form__input" type="text" placeholder="Profession" name="profession" required>
            
            <div class="genderdetails">
                                    <input type="radio" name="gender" id="dot-1">
                                    <input type="radio" name="gender" id="dot-2">
                                    <input type="radio" name="gender" id="dot-3">
                                    <span class="gendertitle" style="font-size:15px;">Gender</span>
                                    <div class="category">
                                        <label for="dot-1">
                                            <span class="dot one"></span>
                                            <span class="gender">Male</span>
                                        </label>
                                        <label for="dot-2">
                                            <span class="dot two"></span>
                                            <span class="gender"> Female </span>
                                        </label>
                                        <label for="dot-3">
                                            <span class="dot three"></span>
                                            <span class="gender">Other</span>
                                        </label>
                                    </div>
            </div>
                                
            <button class="form__button button"  type="submit">SIGN UP</button>
          </form>
        </div>
        <div class="container b-container" id="b-container">
          <form class="form" id="b-form" method="post" action="login.php">
            <h2 class="form_title title">Sign in to Website</h2>
   
            <div class="form__icons">
            <i class="fab fa-google" onclick="window.location='<?php echo $loginURL?>';" name="google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
          </div>
              <span class="form__span">or use your email account</span>
   
            <input class="form__input" type="text" placeholder="Email" name="email" required>
            <input class="form__input" type="password" placeholder="Password"name="password" required><a class="form__link">Forgot your password?</a>
            <button class="form__button button" type="submit" value="Login" >SIGN IN</button>
          </form>
        </div>
        <div class="switch" id="switch-cnt">
          <div class="switch__circle"></div>
          <div class="switch__circle switch__circle--t"></div>
          <div class="switch__container" id="switch-c1">
            <h2 class="switch__title title">Welcome Back !</h2>
            <p class="switch__description description">To keep connected with us please login with your personal info</p>
            <button class="switch__button button switch-btn">SIGN IN</button>
          </div>
          <div class="switch__container is-hidden" id="switch-c2">
            <h2 class="switch__title title">Hello Friend !</h2>
            <p class="switch__description description">Enter your personal details and start journey with us</p>
            <button class="switch__button button switch-btn">CREATE ACCOUNT</button>
          </div>
        </div>
      </div>
</body>
</html>

<script>
let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");
let allButtons = document.querySelectorAll(".submit");
 
let getButtons = (e) => e.preventDefault()
 
let changeForm = (e) => {
 
    switchCtn.classList.add("is-gx");
    setTimeout(function(){
        switchCtn.classList.remove("is-gx");
    }, 1500)
 
    switchCtn.classList.toggle("is-txr");
    switchCircle[0].classList.toggle("is-txr");
    switchCircle[1].classList.toggle("is-txr");
 
    switchC1.classList.toggle("is-hidden");
    switchC2.classList.toggle("is-hidden");
    aContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-z200");
}
 
let mainF = (e) => {
    for (var i = 0; i < allButtons.length; i++)
        allButtons[i].addEventListener("click", getButtons );
    for (var i = 0; i < switchBtn.length; i++)
        switchBtn[i].addEventListener("click", changeForm)
}
 
window.addEventListener("load", mainF);
</script>


