<?php session_start(); ?>
<link rel="stylesheet" href="../bootstrap.min.css">
<div class="mainlogin">
    <div class="loginFormIntro">

        <h2>Log in and Enjoy the features of the website</h2>
        <div>


        </div>
    </div>
    <!-- Added the background color for the form writing and we will php soon  -->
    <div class="loginForm bg bg-light">
        <form class="formforLogin" action="login.php" method="POST" enctype="multipart/form-data">
            <!-- This is the diffult value of the urlencoded -->

            <div>
                <?php if (isset($_SESSION["error"])) {
                    $err = $_SESSION["error"];
                    echo "<div class='alert alert-primary'> $err</div>";

                }
                // try to fix this again
                ?>

            </div>
            <div>
                <div>
                    <label for="emailing">Email</label>

                </div>
                <div>
                    <input type="email" placeholder="Enter your account" id="emailing" name="email" required>

                </div>

                <div>
                    <label for="pass">Password</label>
                </div>
                <div>
                    <input type="password" placeholder="Enter your Password" id="pass" name="password">
                </div>
                <div>
                    <label for="name">Username</label>
                </div>
                <div>
                    <input type="text" placeholder="Enter your name" id="name" name="userName" required>
                </div>
                <div>
                    <label for="photo">Upload Your Photo</label>

                </div>

                <div>
                    <input type="file" placeholder="Upload your Picture" name="image" accept="image">
                </div>


            </div>
            <input type="submit" class="btn btn-warning" value="Login" name="action">
            <?php

            if (!isset($_COOKIE["userName"])) {
                echo <<<"M"
                <input type="submit" class="btn btn-primary" value="Register" name="action">
                M;
            }


            ?>

        </form>
    </div>

    <script src="main.js"></script>

</div>