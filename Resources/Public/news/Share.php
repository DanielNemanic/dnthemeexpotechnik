<?php

$Absender = "webservice@etglobal.com";
$Empfgaenger = htmlspecialchars( $_POST['value'][0]['value'] );
$Empf = explode( "@", $Empfgaenger );

$BaseUrl = htmlspecialchars( $_POST['value'][4]['value'] );
$Link = $BaseUrl.$_POST['link'];

$Titel = htmlspecialchars( $_POST['value'][1]['value'] );
$Teaser = htmlspecialchars( $_POST['value'][2]['value'] );
$Picture = htmlspecialchars( $_POST['value'][3]['value'] );
$PicEx =  $Picture;

$LangArray = explode( "/", $Link );
$Language = $LangArray[3];

if( $Language != 'de' ||  $Language != 'en' ) {
	$Language = 'en';
}

if( !empty( $Empfgaenger ) && in_array('expotechnik.com', $Empf) || !empty( $Empfgaenger ) && in_array('etglobal.com', $Empf)) {
	$LanguageMessage['en']['Summary'] = 'An interesting Link for you ...';
//	$LanguageMessage['en']['Message'] = '... take a look on the following link.';
	$LanguageMessage['en']['MailSend'] = 'Mail was sent.';
	$LanguageMessage['en']['MailSendError'] = 'There was a problem.';
	$LanguageMessage['en']['ReadMore'] = 'Read more at: ';
	
	$LanguageMessage['de']['Summary'] = 'Ein interessanter Link für Sie ...';
//	$LanguageMessage['de']['Message'] = '... werfen Sie einen Blick auf den folgenden Link.';
	$LanguageMessage['de']['MailSend'] = 'Mail wurde gesendet.';
	$LanguageMessage['de']['MailSendError'] = 'Es gab ein Problem.';
	$LanguageMessage['de']['ReadMore'] = 'Mehr auf: ';
		
	include_once $_SERVER['DOCUMENT_ROOT'].'/typo3conf/ext/dnthemeexpotechnik/Resources/Public/news/PHPMailer/class.phpmailer.php';
	$EMailServer = '10.100.106.6';

	$Panel = '	
<div style="width: 100%;text-align: center;">
    <img src="http://'.$_SERVER['HTTP_HOST'].'/typo3conf/ext/dnthemeexpotechnik/Resources/Public/Icons/E3/ET_horizontal_white_nav.jpg" alt="ET Global" width="150"/>
</div>

<p>
'.$LanguageMessage[$Language]['Message'].' &nbsp;
</p>		
<p>	
<table width="700" style="font-family:Arial;" >
	<tr>
		<td><img src="http://'.$_SERVER['HTTP_HOST'].$Picture.'" width="200" ></td>
		<td>
		    <h4>'.$Titel.'</h4>
		    <p>'. substr($Teaser, 0, 100 ).'</p>
        </td>
	</tr>
</table>
</p>			
<p style="font-family:Arial">'. $LanguageMessage[$Language]['ReadMore'] . $Link .'</p>
';

    $Message = NULL;
	$Message .= $Panel;

	$mail = new PHPMailer;
	$mail->CharSet = 'utf-8';
	$mail->IsSMTP();                                     // Set mailer to use SMTP
	$mail->Host = $EMailServer;  // Specify main and backup server
	$mail->SMTPAuth = false;                               // Enable SMTP authentication

	$mail->From = $Absender;
	
	if( preg_match( "/;/", $Empfgaenger ) ){
		$EmpfgaengerArray = explode( ";", $Empfgaenger );
		foreach( $EmpfgaengerArray as $key=>$value ){
			$mail->AddAddress($value);
		}
	} else {
		$mail->AddAddress($Empfgaenger);
	}
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = $LanguageMessage[$Language]['Summary'];
	$mail->Body    = $Message;
	$mail->AltBody = $Message;

    $Content = NULL;
	if(!$mail->Send()) {
		$Content .= '<div class="uk-alert uk-alert-error">';
		$Content .= $LanguageMessage['en']['MailSendError'];
		$Content .= '<p>Mailer Error: ' . $mail->ErrorInfo .'</p>';
		$Content .= '</div>';
	} else {
		$Content .= '<div class="uk-alert uk-alert-success">';
		$Content .= $LanguageMessage['en']['MailSend'];
		$Content .= '</div>';
	}
	echo $Content;
}