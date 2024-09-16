<?
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	$mail = new PHPMailer(true);
	try{
		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'srapik614@gmail.com';
		$mail->Password = 'evvqbhdbkegvhhwr';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->CharSet = 'UTF-8';
		$mail->setFrom('srapik614@gmail.com');
		$mail->addAddress($_SESSION["MF_EMAIL"]);
		$mail->Subject = "Marshall Site";
		$mail->Body = "YOUR 10 % OFF ON FIRST ORDER";
		$mail->send();
		?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	catch(Exception $e){}
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" class="mailing_form" method="POST">
<?=bitrix_sessid_post()?>
	<input type="text" placeholder="your mail" name="user_email"  class="mailing__input">
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="subscribe" class="mailing__submit">
</form>
</div>