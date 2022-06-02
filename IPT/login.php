<?php
		if(isset($_SESSION['user']) || isset($_COOKIE['user']))
		{
			header("Location: homepage.php");
			exit();
		}

	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <script src="https://kit.fontawesome.com/766c184925.js" crossorigin="anonymous"></script>
</head>
<body>
<?php

if(isset($_SESSION['invalid']))
{
    echo $_SESSION['invalid'];
}
else
{
    session_start();
    unset($_SESSION['Invalid']);
}
/** 
    include "connection.php";
    if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
        header("Location: index.html");
    }
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $remember = isset($_POST['rememberme']);
        if(check($conn, $email, $password) > 0){
            if($remember){
                setCookie("user", $email, (time() * (84600 * 365)), "/");
            }else{
                session_start();
                $_SESSION['user'] = $email;	
            }
            header("Location: homepage.php");
        }else{
            echo "User Didn't exists";
        }
    }
    function check($conn, $email, $password){
        return mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'"));
    }
    */
?>
    <div class="container-fluid login-page-bg-pic">
        <form action="" class="login-form">
            <h1 class="log-in-header">Log in to PSU Hotel</h1>
            <div class="login-with-btn-section">
                <button type="button" class="btn login-with-google-btn"><img src="img/image 21.png" alt="Google icon">Login with Google</button>

                <button type="button" class="btn login-with-fb-btn"><img src="img/image 22.png" alt="Facebook icon">Login with Facebook</button>
            </div>
            <p class="in-between">
                <span class="in-between-line-1"></span>
                or
                <span class="in-between-line-2"></span>
            </p>
            <div class="input-box">
                <input type="email" name="" id="" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" name="" id="" placeholder="Password">
            </div>
            <div class="checkbox-forgot-pw-section">
                <div class="checkbox"><input type="checkbox" name="" id=""> Remember me</div>
                <p><a href="#" class="forgot-pw-link" target="_self">Forgot password</a></p>
            </div>
            <div class="login-btn-section">
                <button type="button" class="btn login-btn"></button>
            </div>
            <div class="dont-have-an-acc-section">
                <p>Don't have an account?<a href="sign-in.html" target="_self" class="sign-in-link">Sign in</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>