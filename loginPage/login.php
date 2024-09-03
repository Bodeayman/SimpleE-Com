<link rel="stylesheet" href="../bootstrap.min.css">
<?php
session_start();

// this is the php code information
$hostname = "localhost";
$dbname = "users";
$password = "BODE@999BODE@999";
$username = "root";
$table = "userstable";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["userName"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $profileImageName = $_FILES["image"]['name'];
        $profileImageSize = $_FILES["image"]['size'];
        $profileImageTmp = $_FILES["image"]['tmp_name'];
        $profileImageType = $_FILES["image"]['type'];
        $profileImageExt = array("jpg", "jpeg", "png", "gif");
        // $profileImageExten = strtolower(end(explode('.', $profileImageName)));
        $avater = rand(0, 100000) . "_" . $profileImageName;
        move_uploaded_file($profileImageTmp, "uploads/avatars/" . $avater);
        // this is the source and the destination of the uploaded files






        if ($_POST["action"] == "Login") {
            $sql = "SELECT * FROM $table WHERE email = '$email' and  pass = '$pass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                if (!isset($_COOKIE["userName"])) {
                    setcookie('userName', $name, strtotime("+1 months"), "/");

                    setcookie("userPhoto", $result->fetch_assoc()["images"], strtotime("+1 months"), "/");

                }

                thanksforLogin();
            } else {
                // echo '<script>window.alert("Wrong Email or Username");</script>';
                $_SESSION["error"] = "Wrong Email or Password";

                // it will run the window.alert method until it works 
                header("Location: index.php");


            }
        } else if ($_POST["action"] == "Register") {
            if ($_FILES["image"]['name'] == "") {
                $_SESSION["error"] = "Please upload a profile image"; // this is the error i you didn't upload
                header("Location: index.php");

            } else {
                $sql = "SELECT * FROM $table WHERE email = '$email' and pass = '$pass' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // echo '<script>window.alert("This user is already registered");</script>';

                    $_SESSION["error"] = "This user is already Registered ";

                    header("Location: index.php");

                } else {
                    $sql = "insert into $table (naming,email,images,customer_id,pass) values('$name','$email','$avater'," . rand(0, 10000) . ",'$pass')";
                    $result = $conn->query($sql);
                    if (!isset($_COOKIE["userName"])) {
                        setcookie('userName', $name, strtotime("+1 months"), "/");

                        setcookie("userPhoto", $avater, strtotime("+1 months"), "/");


                    }
                    thanksforLogin();
                }
            }
            // SELECT * FROM $table WHERE name = '$name' AND email = '$email'


        } else {

            die("Invalid Register action");
        }

    }

} else {
    header("Refresh:2;url='index.php'");
}

function thanksforLogin()
{
    echo <<<"Log"
    <div class="alert alert-success">Wait a moment , we will log you in</div>
    <div class="spinner-border" role="status" style="text-align: center; margin-left: 50%; margin-top: 10%;"><span class="visually-hidden text-warning">Loading...</span></div>
    Log;

    header("Refresh:1;url='index.php'");


    exit;
    // the Refresh will work after the login and register success message with 3 sedconds

}
