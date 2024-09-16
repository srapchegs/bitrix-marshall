<?
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{      
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'srapik614@gmail.com';
        $mail->Password = 'evvqbhdbkegvhhwr';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('srapik614@gmail.com');
        $mail->addAddress('srapik614@gmail.com');
        $mail->Subject = "Вы подписались на рассылку";
        $mail->Body = "Рассылка";
        $arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
        $mail->send();
        echo 'Message has been sent';
    }
    catch(Exception $e){
        echo("Error");
    }
    }
?>
