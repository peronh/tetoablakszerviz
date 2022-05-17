<?php

use Mailgun\Mailgun;

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

	$mgClient = Mailgun::create(API_KEY, ENDPOINT);

	$domain   = MAILGUN_HOST;
	$params   = [
		'from'                  => MAIL_FROM_ADDRESS,
		'to'                    => filter_var('pronyecz@gmail.com', FILTER_VALIDATE_EMAIL),
		'subject'               => 'Üzenet a Tetőtéri ablakszervíz weboldalról',
		'template'              => 'tetoteriaablakszerviz',
		'h:X-Mailgun-Variables' => '{"name": "'.$name.'", "email": "'.$email.'", "message": "'.$message.'"}',
	];

	$sent = $mgClient->messages()->send($domain, $params);
	if ($sent)
	{
		$status = 'success';
		$statusMsg = 'Köszönjük érdeklődését! Üzenetét sikeresen továbbítottuk.';
	}
	else
	{
		$status = 'error';
		$statusMsg = 'Sajnáljuk, valami hiba történt az email küldés során!';
	}
}
