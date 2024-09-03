<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Offers Page</title>
        <link rel="stylesheet" href="master.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    </head>

    <body>
        <!-- The section for the offcanvas (should be removed i think) -->
        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">Enable body scrolling</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
        </div> -->
        <!-- The section for the menu -->
        <?php include 'components/navbar.php' ?>


        <div class="main">
            <div class="images">
                <div class="bigImg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <!-- The  trigger button for the model is found up here -->
                    <img src="images/image-product-1.jpg" class="rounded">
                </div>
                <div class="slider d-flex justify-content-space-between">
                    <img class="rounded" data-set="1" src="images/image-product-1-thumbnail.jpg">
                    <img class="rounded" data-set="2" src="images/image-product-2-thumbnail.jpg">
                    <img class="rounded" data-set="3" src="images/image-product-3-thumbnail.jpg">
                    <img class="rounded" data-set="4" src="images/image-product-4-thumbnail.jpg">

                </div>
            </div>
            <div class="inter">
                <p>Offers for <?php
                if (isset($_COOKIE["userName"])) {
                    echo $_COOKIE["userName"];
                }
                ?></p>
                <p class="title fw-bold">Sneaker Company</p>
                <h1 class="fw-bold">Fall Limited Edition Sneakers</h1>
                <p class="desc">These low-profile sneakers are your perfect casual wear companion. Featuring a durable
                    rubber outer
                    sole.they'll withstand everthing the weather can offer</p>
                <p class="price">$125.00 <span class="badge bg-secondary"
                        style="position:relative;left:20px;">50%</span></p>
                <p class="origin" style="text-decoration:line-through;">$250.00</p>
                <div class="options d-flex ">
                    <button class=" btn btn-light min"><img src="images/icon-minus.svg"></button>
                    <div class="payout">0</div>

                    <button class="btn btn-light plus"><img src="images/icon-plus.svg"></button>
                    <button class="add btn btn-warning"><img src="images/icon-cart.svg">Add to Cart</button>
                </div>
            </div>
            <div class="mainblock">

            </div>
        </div>

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <img class="rounded" src="images/image-product-1-thumbnail.jpg">
                        <img class="rounded" src="images/image-product-2-thumbnail.jpg">
                        <img class="rounded" src="images/image-product-3-thumbnail.jpg">
                        <img class="rounded" src="images/image-product-4-thumbnail.jpg">
                    </div>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php' ?>

        <script src="avaterCheck.js"></script>
        <script src="main.js"></script>
        <script src="bootstrap.bundle.min.js"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script> -->

    </body>

</html>

<!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->