<?php 
include("connect.php");
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$uname=$_REQUEST['username'];
$pass=$_REQUEST['Password'];

$sql = "SELECT * FROM users WHERE username='$uname' AND pass='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['username']=$row['username'];
    header('Location: dashboard.php');
}
// $sql = "INSERT INTO users (fullname,username,email,pass)  VALUES ('$first_name','$uname','$email','$pass')";
// mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="login.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="text" name="Password" id="Password" required>
                </div>

                <div class="field ">
                     <input type="submit" class="btn" name="sumit" value="Login" required>
                </div>
                <div class="links">
                    Don't have Account? <a href="dashboard.php">Sign Up Now</a>
                </div>


            </form>
        </div>
    </div>
</body>
</html>