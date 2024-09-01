<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="master.css">
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <title>About us</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!-- put the menu button on the left of the logo -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img class="navbar-brand" src="../images/logo.svg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Offers<a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../mainStore/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contactPage/index.php">Contact</a>
                        </li>

                    </ul>
                </div>

                <ul class="cartSec ms-auto ">
                    <div class="cartIcon">
                        <div>
                            <img src="../images/icon-cart.svg"
                                style="object-fit:contain;width:30px;height:30px;position:relative;">
                            <span
                                class="piller position-absolute top-10 start-200 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </div>
                    </div>
                    <img class="avater" src="../images/image-avatar.png">
                </ul>

            </div>
        </nav>

        <div class="aboutInfo bg-light">
            <h1>Welcome to your favourite E-commerce Website</h1>
            <p>It's done by Abdullah Ayman</p>
            <p>The website provides</p>
            <ul>
                <li>
                    A great UI to deal with
                </li>
                <li>
                    A full functional search bar to fetch the data
                </li>
                <li>
                    a Form for contact for any problem
                </li>
                <li>
                    A section for the offers and the advertisements
                </li>
                <li>
                    A login Page using php
                </li>
            </ul>
            <p>We hope to improve our services more and more</p>

        </div>
        <div class="FAQ" style="margin-left:30px;">
            <style>

            </style>
            <h2>FAQ</h2>
            <h3>How does the session longs in the php login?</h3>
            <h4>It will continue for a full month</h4>
            <h3>How do you fetch the items?</h3>
            <h4>Using fetch api with javascript and using the promises</h4>
            <h3>Can i pay using this website?</h3>
            <h4>Actually not now</h4>
            <h3>How much this website is left to do?</h3>
            <h4>We should improve more the login section and try to add images and profile</h4>
            <h4>Organize the pages and the files even better</h4>
            <h4>Try to upload this on github</h4>
        </div>

        <script src="../avaterCheck.js"></script>

        <script src="../bootstrap.bundle.min.js"></script>

    </body>

</html>