<?php

use Mailgun\Mailgun;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//if (isset($_POST['g-recaptcha-response'])) {
//	$captcha = $_POST['g-recaptcha-response'];
//} else {
//	$captcha = false;
//}

if (isset($_POST['sendmail']))
{
	$name                 = !empty($_POST['name']) ? trim($_POST['name']) : null;
	$email                = !empty($_POST['email']) ? trim($_POST['email']) : null;
	$message              = !empty($_POST['message']) ? trim($_POST['message']) : null;


	$mail = new PHPMailer();
	try {
		$mail->isSMTP();
		$mail->Host       = 'mail.tetoteriablakszerviz.hu';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'support@tetoteriablakszerviz.hu';
		$mail->Password   = SMTP_PASS;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 587;

		$mail->setFrom(MAIL_FROM_ADDRESS, 'Zolnai Lajos');
		$mail->addAddress(MAIL_FROM_ADDRESS, 'Zolnai Lajos');

		//Content
		$mail->isHTML(true);
		$mail->Subject = utf8_decode('Üzenet tetoteriablakszerviz.hu weboldalról');
		$mail->setLanguage('hu', BASE_URL.'/vendor/phpmailer/phpmailer/language/');
		$mail->CharSet = "UTF-8";
		$mail->Body    = '<html lang="hu" style="margin: 0; padding: 0; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;box-sizing: border-box;font-size: 14px;">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Actionable emails e.g. reset password</title>
	<link href="https://zsoltiacm.hu/web/css/mail.css" media="all" rel="stylesheet" type="text/css" />
	<style>tr > a {
            background-color: yellow;
        }</style>

</head>

<body style="-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important;height: 100%;line-height: 1.6;">
<table class="body-wrap" style=" background-color: #f6f6f6;width: 100%;">
	<tr>
		<td></td>
		<td class="container" style="display: block !important;max-width: 600px !important;margin: 0 auto !important;clear: both !important;" width="600">
			<div class="content" style="max-width: 600px;margin: 0 auto;display: block;padding: 20px;">
				<table class="main" style=" background: #fff; border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="content-wrap" style="padding: 20px;">
							<table  cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block" style="padding: 0 0 20px;vertical-align: top;text-align: center;">
										<h3 style="text-align:cente;font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;color: #000;margin: 40px 0 0;line-height: 1.2;font-weight: 400;color: #5f6368!important;text-decoration: none!important;">Új üzenete érkezett '.$name.' ügyféltől</h3>
									</td>
								</tr>
								<tr>
									<td class="content-block" style="color: #5f6368!important;text-decoration: none!important;padding: 0 0 20px;vertical-align: top;">
										Név: '.$name.'
									</td>
								</tr>
								<tr>
									<td class="content-block" style="padding: 0 0 20px;vertical-align: top;color: #5f6368!important;text-decoration: none!important;">
										Email: '.$email.'
									</td>
								</tr>

								<tr>
									<td class="content-block" style="color: #5f6368!important;text-decoration: none!important;padding: 0 0 20px;vertical-align: top;">
										Üzenet: '.$message.'
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="footer" style="width: 100%;clear: both;color: #999;padding: 20px;">
					<table width="100%">
						<tr>
							<td class="aligncenter content-block">Follow <a href="https://webron.hu" style="color: #999;text-decoration: none;">webron</a></td>
						</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>';


		$sent = $mail->send();
		if ($sent)
		{
			$status = 'success';
			$statusMsg = 'Köszönjük érdeklődését! Üzenetét sikeresen továbbítottuk.';
		}

	} catch (Exception $e) {
		$status = 'error';
		$statusMsg = 'Sajnáljuk, valami hiba történt az email küldés során!';
	}

}
