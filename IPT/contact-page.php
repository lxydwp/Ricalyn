<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/766c184925.js" crossorigin="anonymous"></script>
</head>
<body>
     <!--header-->
     <?php include "header.php"; ?>
    <!--contact page-->
    <div class="container-fluid bg-pic-contact-page" id="contact">
        <div class="address-info">
            <div class="address-icon"><i class="fa-solid fa-location-dot"></i></div>
            <p class="address-text text-capitalize">alvear street poblacion</p>
            <p class="address-text text-capitalize">lingayen, pangasinan</p>
        </div>
        <div class="contact-form">
        <form action="">
            <h1 class="contact-header text-uppercase">message us</h1>
            <div class="input-box">
                <input type="text" name="" id="" placeholder="Enter your name">
            </div>
            <div class="input-box">
                <input type="text" name="" id="" placeholder="Enter your email address">
            </div>
            <div class="input-box">
                <textarea name="" id="" cols="30" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <div class="btn-form">
                <button type="button" class="btn custom-btn-1 text-uppercase text-white fw-bold">send</button>
            </div>
        </form>
        </div>
        <div class="call-us-info">
            <div class="call-us-icon"><i class="fa-solid fa-phone"></i></div>
            <p class="call-us-text">1 (023) 456-789</p>
            <p class="call-us-text">1 (023) 456-789</p>
            <p class="call-us-text">09506838695</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>