<?php
function hr_sendmail($title,$body,$to,$frommail,$frompassword){
	$sarr=explode('@',$frommail);
	$mail  = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;
	$mail->Host 	= 'smtp.'.$sarr[1];
	$mail->Port       = 25;
	$mail->Username   = $frommail;
	$mail->Password   = $frompassword;
	$mail->From       = $frommail;
	$mail->FromName   = $frommail;
	$mail->Subject    = $title;
	$mail->MsgHTML($body);
	$mail->AddAddress($to,$to);
	$mail->IsHTML(true); 
	$result=$mail->Send();
	if($result!==true)
		return $mail->ErrorInfo;
	return 'yes';
}
?>