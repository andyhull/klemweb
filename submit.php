<?php

ini_set('sendmail_from', 'klem@klemflastic.com');
$message = '<html>
<head>
<title>Klemflastic</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">Thanks for contacting Klemflastic Sound.  We\'ll write/call soon.  In the meantime, please review the information below.  If you\'re ready to proceed, please visit the \'Preparation\' section at <a href="http://www.klemflastic.com">www.klemflastic.com</a> for information on how to deliver project materials to us.  You can also pay the deposit via PayPal to klem@klemflastic.com or contact us (same address) for our postal address.<br><br>

Best,<br>
Patrick Klem<br><br><hr>
';
foreach ($_POST as $key => $value) {
    $message .= "<b>$key:</b><br>$value<br />&nbsp;<hr>\n";
}
$message .= '</body></html>';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= 'From: Patrick Klem <klem@klemflastic.com>'."\r\n";
    $headers .= 'Reply-To: klem@klemflastic.com'."\r\n";
	mail("klem@klemflastic.com","Klemflastic - From ".$_POST['name'],$message,$headers);
	//mail("mark@zurada.com","Klemflastic!",$message,$headers);

?>

