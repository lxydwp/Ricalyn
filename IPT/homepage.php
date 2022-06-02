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
    <!--homepage-->
    <div class="container-fluid homepage">
        
        <div class="homepage-grid">
            <div class="left-col">
                <img src="img/image 25.png" alt="PSU Hotel" class="homepage-img">
                <div class="img-description">
                    <h1 class="homepage-header">The PSU Hotel</h1>
                    <p class="rating">
                        5.0
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        (653 Reviews)
                    </p>
                    <h2 class="homepage-subheader">Hotel Description</h2>
                    <p class="description">The PSU Hotel is one of largest and well known hotel here in LIngayen, Pangasinan. 
                    Our Hotel have a lot to offer to enjoy your stay.</p>
                </div>
            </div>
            <div class="right-col">
                <div class="right-col-btn-section">
                    <button type="button" class="btn right-col-custom-btn fw-bold">Show map</button>
                    <button type="button" class="btn right-col-custom-btn fw-bold">Contact info</button>
                </div>
                <div class="map-section">
                    <img src="img/image 26.png" alt="Map Location of PSU Hotel" class="map">
                </div>
                <div class="right-col-reviews-section">
                    <h3 class="review-header">Reviews</h3>
                    <div class="reviews">
                        <div class="user-review-section">
                            <div class="user-review">
                                <i class="fa-solid fa-m"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="review-description">My  vacation become extraordinary with PSU Hotel</p>
                            </div>
                            <div class="user-review">
                                <i class="fa-solid fa-v"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="review-description">I enjoy my stay in PSU Hotel</p>
                            </div>
                            <div class="user-review">
                                <i class="fa-solid fa-r"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="review-description">I love PSU Hotel</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section">
                        <form action="">
                            <input type="text" name="" id="" placeholder="Enter your comment" class="comment-input-box">
                            <button type="button" class="btn comment-btn fw-bold">POST</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>