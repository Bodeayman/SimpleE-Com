<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout | <?php if (isset($_COOKIE["userName"])) {
            echo $_COOKIE["userName"];
        }
        ?></title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="master.css" />
        <link href="../bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    </head>

    <body>
        <?php include '../components/navbar.php' ?>



        <div style="display:flex;flex-direction:column;text-align:center;justify-content:center;align-items:center;">
            <h3>Checkout Page</h3>
            <h5>Here you will find all the items that you requested</h5>

        </div>
        <?php include '../components/footer.php' ?>

        <script>
        </script>
        <script src="../avaterCheck.js"></script>
        <script src="../bootstrap.bundle.min.js"></script>


    </body>

</html>