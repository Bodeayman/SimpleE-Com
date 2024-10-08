<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- put the menu button on the left of the logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <img class="navbar-brand" src="../images/logo.svg"> -->
        <h1 class="navbar-brand">
            JimTan
        </h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Offers<a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../checkoutPage/index.php">Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../aboutPage/index.php">About</a>
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
            <img class="avater" src=<?php
            if (isset($_COOKIE["userPhoto"])) {
                echo "..\loginPage\uploads\avatars\\" . $_COOKIE["userPhoto"];
            } else {
                echo "../images/image-avatar.png";
            }
            ?> style="width:50px;height:50px;border-radius:50px;">
        </ul>

    </div>
</nav>