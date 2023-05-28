<?Php


echo 'okay';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'darklight1062@gmail.com';
    $mail->Password = 'scsnrjhrayibjaxd';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('darklight1062@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = "From " . $_POST['email'];
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $subject = $_POST["message"];
    $zipcode = $_POST["zipcode"];
    
    $message = "Client Name:" . $firstname . $lastname . "\n"
        . "email address: " . $email . "\n\n"
        . "address: " . $address . "\n"
        . "city: " . $city . "\n"
        . "country: " . $country . "\n"
        . "state: " . $state . "\n"
        . "zipcode: " . $zipcode . "\n\n\n"
        . "Client Message: " . $subject . "\n";
        $mail->Body = $message;
    $mail->send();
    $success = true;
        echo '
        <script>
        document.location.href = "contact.php";
        </script>
        ';
    }

    ?>
    

