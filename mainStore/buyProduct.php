<link rel="stylesheet" href="../bootstrap.min.css">
<?php
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$person = $_COOKIE["userName"];
$image = $_COOKIE["userPhoto"];
$id = urldecode($_GET['id']); // get the id from the link

$hostname = "localhost";
$dbname = "users";
$password = "BODE@999BODE@999";
$username = "root";
$table = "products";
$WhoSigned = $_COOKIE["userName"];
$conn = mysqli_connect($hostname, $username, $password, $dbname);
$sql = "update products set product_quantity = product_quantity - 1 where product_id = '$id' ";
$result = $conn->query($sql);
$sql = "select * from products where product_id = '$id' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$SellerId = $row['person_id'];
$productName = $row["product_name"];
$img = $row["product_image"];
$sqlBuyer = "SELECT * FROM userstable where naming = '$WhoSigned'";
$resultRow = $conn->query($sqlBuyer)->fetch_assoc();
$BuyerId = $resultRow['customer_id'];
$sql = "insert into checkout (record_id, product,quantity,dateofPur,seller_id,buyer_id,product_image_rec) values (" . rand(0, 10000) . ",'$productName' ,1,current_timestamp(),$SellerId, $BuyerId ,'$img')";
$conn->query($sql);

//This is the product which is related to emailing

$sqli = "select * from userstable where images = '$image' ";
$resulty = $conn->query($sqli);
$row = $resulty->fetch_assoc();

$personEmail = $row["email"];
$personName = $row["naming"];
$msg = "
Hello $personName ,
Thanks you for buying $productName it will reach to you after 2 days
JimTan
";
// sendingEmail($msg, $personEmail) End code;


thanksforLogin();

function thanksforLogin()
    {
    echo <<<"Log"
        <div class="alert alert-success">Your Item was bought Successfully we will send the email right now To Show the details</div>
        <div class="spinner-border" role="status" style="text-align: center; margin-left: 50%; margin-top: 10%;"><span class="visually-hidden text-warning">Loading...</span></div>
        Log;

    header("Refresh:3;url='index.php'");


    exit;
    // the Refresh will work after the login and register success message with 3 sedconds
/*Message could not be sent. Mailer Error: SMTP Error: Could not connect to SMTP host. Failed to connect to serverSMTP server error: Failed to 
connect to server SMTP code: 10061 Additional SMTP info: No connection could be made because the target machine actively refused it */

    //2024-09-14 14:57:04 SMTP ERROR: Failed to connect to server: No connection could be made because the target machine actively refused it (10061)
//SMTP Error: Could not connect to SMTP host. Failed to connect to server
//Message could not be sent. Mailer Error: SMTP Error: Could not connect to SMTP host. 
//Failed to connect to serverSMTP server error: Failed to connect to server SMTP code: 10061 Additional SMTP info: No connection could be made because the target machine actively refused it
    }











/*
function sendingEmail($msg, $email)
{
try {
    $msg = wordwrap($msg, 70);
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isSMTP();
    $mail->Host = 'mail.localhost.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abdulluhayman@gmail.com';
    $mail->Password = '01141722631';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Body = $msg;
    $mail->setFrom('s-abdullah.ali@zewailcity.edu.eg');
    $mail->addReplyTo('s-abdullah.ali@zewailcity.edu.eg');
    $mail->Subject = 'Here is the Subject';
    $mail->isHTML();
    $mail->addAddress($email, 'JimTan Address');
    $mail->send();
    echo "Mail has been sent successfully!";


    } catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

*/
?>
<script src="bootstrap.bundle.min.js"></script>


<!--  -->