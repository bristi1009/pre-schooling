<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Kindergarten Website</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kindergarten</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#education">education</a>
            <a href="#teacher">teacher</a>
            <a href="#activities">activities</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <!-- check if user is logged in -->
            <?php
            if (isset($_COOKIE['user_id'])) {
                echo '<a href="logout.php" class="fas fa-sign-out-alt"> logout</a>';
            } else {
                echo '<a href="login.php" class="fas fa-user"> login</a>';
            }   
            ?>
            <!-- <div class="fas fa-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div> -->
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>welcome to our <span>Kindergarten</span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur minus aut, in maiores quidem </p>
            
        </div>

        <div class="image">
            <img src="images/home.png" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about us section starts -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="images/about us.png" alt="">
            </div>

            <div class="content">
                <h3>Exploring, Growing, And Thriving Together</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam amet nam distinctio sunt facilis, quia accusamus sapiente at quod iure ea commodi? Labore, culpa! Voluptates delectus magni atque suscipit earum.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam amet nam distinctio sunt facilis, quia accusamus sapiente at quod iure ea commodi? Labore, culpa! Voluptates delectus magni atque suscipit earum.</p>
                
            </div>

        </div>

    </section>

    <!-- about us section ends -->

    <!-- education section start -->

    <section class="education" id="education">

        <h1 class="heading">our <span> education</span></h1>

        <div class="box-container">

            <div class="box">
                <h3>music lessons</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <input type="submit" value="Details" class="btn">
                <img src="images/education1.png" alt="">
                <!-- <input type="submit" value="send message" class="btn"> -->
                <!-- BRISTY CODE -->
            </div>

            <div class="box">
                <h3>sports lessons</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="images/education2.png" alt="">
            </div>

            <div class="box">
                <h3>drawing lessons</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="images/education3.png" alt="">
            </div>

        </div>

    </section>

    <!-- education section ends -->

    <!-- teacher section starts -->

    <section class="teacher" id="teacher">

        <h1 class="heading">our <span> teacher</span></h1>

        <div class="box-container">

           
            <div class="box">
                <img src="images/teacher2.png" alt="">
                <h3>Shrestha Roy Chowdhury</h3>
                
            </div>

            <div class="box">
                <img src="images/teacher3.png" alt="">
                <h3>Sadia Sultana Bristi</h3>
                
            </div>

        </div>

    </section>

    <!-- teacher section ends -->

    <!-- activities section starts -->

    <section class="activities"id="activities">

        <h1 class="heading"><span>activities</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/activities1.png" alt="">
                <h3>General Knowledge</h3>
            </div>

            <div class="box">
                <img src="images/activities2.png" alt="">
                <h3>Game</h3>
                <a href="http://127.0.0.1:5503/index.html">Game 1</a> <br>
                <a href="http://127.0.0.1:5501/tic%20tac%20index.html">Game 2</a><br>
                <a href="http://127.0.0.1:5501/color%20index.html">Game 3</a>

            </div>

            <div class="box">
                <img src="images/activities3.png" alt="">
                <h3>Education</h3>
            </div>

            <div class="box">
                <img src="images/activities4.png" alt="">
                <h3>Sports</h3>
            </div>

            <div class="box">
                <img src="images/activities6.png" alt="">
                <h3>Baby song</h3>
                <a href="http://127.0.0.1:5501/index.html">song</a>
            </div>
        </div>
    </section>    