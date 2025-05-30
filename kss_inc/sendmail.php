<?php

function kk_sendmail($title,$body,$to,$frommail,$frommailpassword,$remoteapi='',$Attachment=''){
	if(SENDMAILMODE==2  && $Attachment==''){
		$post=array(
			'title'=>$title,
			'body'=>$body,
			'to'=>$to,
			'frommail'=>$frommail,
			'frompassword'=>$frommailpassword
		);
		$result=HY_226ef1f2ecfae6f172($remoteapi,$post);
		if($result=='yes')$result=true;
		return $result;
	}elseif(SENDMAILMODE==1 || $Attachment!=''){
		include_once KSSINCDIR.'class.phpmailer.php';
		$sarr=explode('@',$frommail);
		$mail  = new PHPMailer();
		$mail->PluginDir  = KSSINCDIR;
		$mail->IsSMTP();
		$mail->SMTPAuth   = true;                  //# enable SMTP authentication
		$mail->Host 	= 'smtp.'.$sarr[1];      //# sets GMAIL as the SMTP server
		$mail->Port       = 25;                   //# set the SMTP port for the GMAIL server
		$mail->Username   = $frommail;  //# GMAIL username
		$mail->Password   = $frommailpassword;            //# GMAIL password	 
		$mail->From       = $frommail;
		$mail->FromName   = $frommail;
		$mail->Subject    = $title;
		$mail->MsgHTML($body);
		$mail->AddAddress($to,$to);
		if($Attachment!='')
			$mail->AddAttachment($Attachment); //# 添加附件
		$mail->IsHTML(true); 
		$result=$mail->Send();
		if($result!==true)
			$result=$mail->ErrorInfo;
		return $result;	
	}else{
		return '邮件发送功能关闭';
	}
}




function bak_sendmail($title,$body,$to,$frommail,$frommailpassword,$remoteapi='',$Attachment=''){
		include_once KSSINCDIR.'class.phpmailer.php';
		$sarr=explode('@',$frommail);
		$mail  = new PHPMailer();
		$mail->PluginDir  = KSSINCDIR;
		$mail->IsSMTP();
		$mail->SMTPAuth   = true;                  //# enable SMTP authentication
		$mail->Host 	= 'smtp.'.$sarr[1];      //# sets GMAIL as the SMTP server
		$mail->Port       = 25;                   //# set the SMTP port for the GMAIL server
		$mail->Username   = $frommail;  //# GMAIL username
		$mail->Password   = $frommailpassword;            //# GMAIL password	 
		$mail->From       = $frommail;
		$mail->FromName   = $frommail;
		$mail->Subject    = $title;
		$mail->MsgHTML($body);
		$mail->AddAddress($to,$to);
		if($Attachment!='')
			$mail->AddAttachment($Attachment); //# 添加附件
		$mail->IsHTML(true); 
		$result=$mail->Send();
		if($result!==true)
			$result=$mail->ErrorInfo;
		return $result;
}


?>
