<?php
include('dbconn.php');
session_start();
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$password = $_REQUEST['password'];
$profession = $_REQUEST['profession'];
$gender = $_REQUEST['gender'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row_count = mysqli_num_rows($result);  


if ($row_count != 0) {
?>
    <script>
        alert('This email id is already registered with us! !!');
        window.location.href = "http://localhost/PROGRAMMING_SCHOOL/index.php";
    </script>
<?php
} else {

        $sql = "INSERT INTO users VALUES ('','$name','$email','$number','$password','$profession','$gender')";
        $sql2 = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];   
        $_SESSION['email'] = $row['email'];   
        $_SESSION['number'] = $row['number'];   
        $_SESSION['profession'] = $row['profession'];   
        $_SESSION['gender'] = $row['gender'];   
        
         
        header('Location:index.php');
}



