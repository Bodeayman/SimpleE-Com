<?php
if (isset($_COOKIE["userName"])) {
    include 'Loggedin.php';
} else {
    include 'Loggout.php';
}
include '../components/footer.php'

    ?>