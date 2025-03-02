<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile page <?php if (isset($_COOKIE["userName"])) {
            echo ' | ' . $_COOKIE["userName"];
        }
        ?> </title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="master.css" />
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    </head>

    <body>
        <?php include '../components/navbar.php' ?>



        <div class="main">
            <?php
            if (!isset($_COOKIE["userName"])) {
                include 'loginFailure.php';
            } else {
                include 'loginSuccess.php';
            }

            ?>

        </div>
        <?php include '../components/footer.php' ?>

        <script>
        </script>
        <script src="../avaterCheck.js"></script>
        <script src="../bootstrap.bundle.min.js"></script>

    </body>

</html>