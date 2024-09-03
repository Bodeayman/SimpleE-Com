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

        <?php include '../components/navbar.php' ?>


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

        <?php include '../components/footer.php' ?>

        <script src="../avaterCheck.js"></script>
        <script src="main.js"></script>
        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>