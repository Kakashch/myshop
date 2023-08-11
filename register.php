<?php 
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$first_name =$_REQUEST['fname'];
$uname=$_REQUEST['username'];
$email=$_REQUEST['Email'];
$pass=$_REQUEST['Password'];

$sql = "INSERT INTO users (fullname,username,email,pass)  VALUES ('$first_name','$uname','$email','$pass')";
mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/style.css">
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="register.php" method="post">
                <div class="field input">
                    <label for="fname">Fullname</label>
                    <input type="text" name="fname" id="fname" required>
                </div>
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="text" name="Password" id="Password" required>
                </div>
                
                <div class="field ">
                    <input type="submit" class="btn" name="submit" value="register" >
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Please Login</a>
                </div>


            </form>
        </div>
    </div>
</body>
</html>
