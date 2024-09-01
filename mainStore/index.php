<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce</title>
        <link rel="stylesheet" href="master.css">
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
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
                            <a class="nav-link" href="../aboutPage/index.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
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


        <div class="searchEngine">
            <div>
                <h2>Welcome to our E-Commerce Site for buying the products that you need</h2>
                <p>Here you can find all the products that you need here</p>
            </div>
            <div class="searchBar">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>

        <script src="../avaterCheck.js"></script>
        <script src="main.js"></script>
        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>