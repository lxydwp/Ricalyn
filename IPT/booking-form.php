<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="booking-form.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/766c184925.js" crossorigin="anonymous"></script>
</head>
<body>
     <!--header-->
     <?php include "header.php"; ?>
    <div class="container-fluid custom-container booking-form-center">
        <form action="" class="booking-form">
            <div class="booking-form-text-section">
                <h2 class="booking-form-header text-uppercase text-center">book your stay</h2>
                <h6 class="booking-form-subheader fw-normal text-center">Please complete the form below</h6>
            </div>
            <div class="name-input-box">
                <h6 class="text-uppercase fw-bold">name</h6>
                <div class="name-input-boxes">
                    
                    <input type="text" name="" id="" required placeholder="First" class="margin-bottom-name-input-field">
                    <input type="text" name="" id="" required placeholder="Last">
                </div>
            </div>
            <div class="email-phone-input-box">
                <div class="email-input-box">
                    <h6 class="text-uppercase fw-bold">email</h6>
                    <input type="email" name="" id="" required>
                </div>
                <div class="phone-input-box">
                    <h6 class="text-uppercase fw-bold">phone</h6>
                    <input type="number" name="" id="" required>
                </div>
            </div>
            <div class="room-guests-dropdowns">
                <div class="room-dropdown">
                    <h6 class="text-uppercase fw-bold">select a room</h6>
                    <div class="dropdown">
                        <button class="btn custom-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Rooms
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Sunset View Deluxe Room</a></li>
                          <li><a class="dropdown-item" href="#">Garden View Deluxe Room</a></li>
                          <li><a class="dropdown-item" href="#">Sea View Deluxe Room</a></li>
                          <li><a class="dropdown-item" href="#">VIP Room</a></li>
                          <li><a class="dropdown-item" href="#">Studio Medium Room</a></li>
                          <li><a class="dropdown-item" href="#">Studio Large Room</a></li>
                        </ul>
                    </div>
                </div>
                <div class="guest-dropdown">
                    <h6 class="text-uppercase fw-bold">number of guests</h6>
                    <div class="dropdown">
                        <button class="btn custom-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          *Please select*
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">1</a></li>
                          <li><a class="dropdown-item" href="#">2</a></li>
                          <li><a class="dropdown-item" href="#">4</a></li>
                          <li><a class="dropdown-item" href="#">8</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="stay-dates-input-box">
                <h6 class="text-uppercase fw-bold">select your stay dates</h6>
                <div class="stay-dates-section">
                    <div class="left-col">
                        <button type="button" class="btn calendar-booking-btn">Arrival <i class="fa-solid fa-calendar"></i></button>
                    </div>
                    <div class="right-col">
                        <button type="button" class="btn calendar-booking-btn">Departure <i class="fa-solid fa-calendar"></i></button>
                    </div>
                </div>
            </div>
            <div class="booking-form-btn-section">
                <button type="button" class="btn booking-form-btn fw-bold text-uppercase">confirm booking</button>
            </div>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>