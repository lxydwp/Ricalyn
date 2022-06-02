
<?php 

require_once 'connection.php';
session_start();



?>


<!DOCTYPE html>
<html>
	<body>
		<!--header-->
		<header class="header fixed-top"
    	<!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light p-3 justify-content-between">
            <div class="container-fluid">

            <!--left-navigation-->
            <div class="left-nav">
                <!--navbar brand-->
                <a class="navbar-brand text-uppercase text-white fw-bold" href="index.html">psu hotel</a>

                <div class="searchbar-section searchbar-none">
                    <form action="">
                        <input type="search" name="" id="" placeholder="Search" class="searchbar">
                        <button type="button" class="btn magnifying-glass-btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            
            <!--hamburger menu/navbar toggler-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--navbar links-->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-white fw-bold" aria-current="page" href="index.html">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-white fw-bold" href="about-page.html">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-white fw-bold" href="gallery-page.html">rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-white fw-bold" href="blog-page.html">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-white fw-bold" href="contact-page.html">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="login.html" target="_self">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn custom-sign-up-btn-dark-green fw-bold text-white" href="sign-in.html" target="_self">Sign in</a>
                    </li>
                    <div class="searchbar-in-navbartoggler">
                        <form action="">
                            <input type="search" name="" id="" placeholder="Search" class="searchbar-mobile-view">
                            <button type="button" class="btn magnifying-glass-btn-mobile-view fw-bold"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </ul>
            </div>
            </div>
        </nav>
    </header>
	</body>
</html>