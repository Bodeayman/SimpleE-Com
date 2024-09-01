<div class="mainlogin">
    <div class="loginFormIntro">

        <h2>Log in and Enjoy the features of the website</h2>
        <div>
            <?php if (isset($_SESSION["error"])) {
                echo $_SESSION["error"];
            }
            // try to fix this again
            ?>

        </div>
    </div>
    <!-- Added the background color for the form writing and we will php soon  -->
    <div class="loginForm bg bg-light">
        <form class="formforLogin" action="login.php" method="POST" enctype="multipart/form-data">
            <!-- This is the diffult value of the urlencoded -->

            <div>
                <div>
                    <label for="name">First Name</label>
                </div>
                <div>
                    <input type="text" placeholder="Enter your name" id="name" name="userName" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="emailing">Email</label>

                </div>
                <div>
                    <input type="email" placeholder="Enter your account" id="emailing" name="email" required>

                </div>
                <div>
                    <label for="photo">Upload Your Photo</label>

                </div>
                <div>
                    <input type="file" placeholder="Upload your Picture" name="image" accept="image">
                </div>
            </div>
            <input type="submit" class="btn btn-warning" value="Login" name="action">
            <input type="submit" class="btn btn-primary" value="Register" name="action">

        </form>
    </div>

    <script src="main.js"></script>

</div>