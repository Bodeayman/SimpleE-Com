<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../checkoutPage/index.php");
}
?>

<div class="container">
    <div class="d-flex" style="flex-direction:row;justify-content:space-between;">
        <!-- This is for the login page and this is the php code for work -->
        <div>
            <h2 class="title">Welcome back <?php echo $_COOKIE["userName"] ?> </h2>
            <p>You can navigate your services powerfully</p>
        </div>

        <div>
            <img src="../images/image-avatar.png">

        </div>
        <form style="margin-top:20px;" method="post" action="logout.php">
            <button class="btn btn-primary" type="submit" name="logout" value="Checkout">
                Looking for checkout your items
            </button>
            <button class="btn btn-primary" type="submit" name="logout" value="Logout">
                Logout
            </button>
        </form>

    </div>



    </form>
</div>


<?php
