<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../checkoutPage/index.php");
}
session_unset();
?>

<div class="container">
    <div class="d-flex" style="flex-direction:column;justify-content:center;align-items:center;">
        <!-- This is for the login page and this is the php code for work -->
        <div class="text-center">

            <h2 class="title">Welcome back <?php echo $_COOKIE["userName"] ?> </h2>
            <p>You can navigate your services powerfully</p>
        </div>

        <div>
            <img class="avater" src=<?php
            if (isset($_COOKIE["userPhoto"])) {
                echo "..\loginPage\uploads\avatars\\" . $_COOKIE["userPhoto"];


            } else {
                echo "../images/image-avatar.png";
            }
            ?> style="width:50px;height:50px;border-radius:50px;">

        </div>
        <form style="margin-top:20px;" method="post" action="logout.php">
            <button class="btn btn-primary" type="submit" name="logout" value="Checkout">
                Looking for checkout your items
            </button>
            <button class="btn btn-success" name="logout" value="NewItem">
                Add new Items
            </button>
            <button class="btn btn-info" name="logout" value="Record" type="submit">
                Items that Bought
            </button>
            <button class="btn btn-danger" type="submit" name="logout" value="Logout">
                Logout
            </button>

        </form>

        <style>
            button {
                margin: 20px;
            }
        </style>
    </div>



    </form>
</div>


<?php
