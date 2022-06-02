<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sign-in-style.css">
    <script src="https://kit.fontawesome.com/766c184925.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
			include "connection.php";
			if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
				header("Location: index.html");
			}
			if(isset($_POST['email']) && isset($_POST['password'])){
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$repassword = isset($_POST['repassword']);
				if($password == $repassword){
					if(check($conn, $email) > 0){
						echo "User already exists";
					}else{
						$sql = mysqli_query($conn, "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')");
						if($sql){
							setCookie("user", $email, (time() * (84600 * 200)), "/");
							header("Location: homepage.php");
						}else{
							echo mysqli_error($sql);
						}
					}
				}else{
					echo "Mismatch passwords";
				}
			}
			function check($conn, $email){
				return mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));
			}
		?>
    <div class="container-fluid sign-in-page-bg-pic">
        <form action="" class="sign-in-form">
            <h1 class="sign-in-header">Sign in to PSU Hotel</h1>
            <div class="sign-in-with-btn-section">
                <button type="button" class="btn sign-in-with-google-btn"><img src="img/image 21.png" alt="Google icon">Sign in with Google</button>
    
                <button type="button" class="btn sign-in-with-fb-btn"><img src="img/image 22.png" alt="Facebook icon">Sign in with Facebook</button>
            </div>
            <p class="in-between">
                <span class="in-between-line-1"></span>
                or
                <span class="in-between-line-2"></span>
            </p>
            <div class="input-box">
                <div class="name-input-form">
                    <input type="text" name="" id="" placeholder="First name">
                    <input type="text" name="" id="" placeholder="Last name">
                </div>
            </div>
            <div class="input-box">
                <input type="email" name="" id="" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" name="" id="" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="password" name="" id="" placeholder="Confirm password">
            </div>
            <div class="checkbox-accept-terms-section">
                <div class="checkbox"><input type="checkbox" name="" id=""> I accept the terms and conditions</div>
            </div>
            <div class="sign-in-btn-section">
                <button type="button" class="btn sign-in-btn"></button>
            </div>
            <div class="dont-have-an-acc-section">
                <p>Already have an account?<a href="login.html" target="_self" class="sign-in-link">Login</a></p>
            </div>
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>