<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <title>Contact us</title>
    </head>

    <body>
        <?php
        include "../components/navbar.php";
        ?>
        <div class="mainContact">
            <div class="contactFormIntro">
                <h2>Thank you for contacting with us</h2>
                <p>Any problem you have is sent through this form</p>
                <p>We are looking forward for your feedback and improving our services</p>
            </div>
            <!-- Added the background color for the form writing and we will php soon  -->
            <div class="contactForm bg bg-light">
                <form action="surveySend.php" method="post">
                    <div>
                        <div>
                            <label for="comm">Comments</label>
                        </div>
                        <div>
                            <textarea col="80" rows="7" id="comm" name="surveyText"></textarea>

                        </div>

                    </div>
                    <input type="submit" class="btn btn-warning" value="Submit your Response">

                </form>
                <div class="contactInfo">
                    <i class="fa-solid fa-phone"></i>
                    <p>Phone Number: +201111112222</p>

                </div>
                <div class="contactInfo">
                    <i class="fa-solid fa-envelope"></i>
                    <p>Email: JimTan@gmail.com</p>

                </div>
            </div>

        </div>
        <script src="../bootstrap.bundle.min.js"></script>
        <script src="../avaterCheck.js"></script>


    </body>

</html>