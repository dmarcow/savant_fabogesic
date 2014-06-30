<?php
	

		
	// Get JSon
	$JSonData = json_decode($_POST['myData']);
	$array 	= array(
		"nombre" 	=> $JSonData->nombre, 
		"apellido" 	=> $JSonData->apellido, 
		"asunto" 	=> $JSonData->asunto, 
		"mensaje" 	=> $JSonData->mensaje
		);

	$body		= file_get_contents('email-contacto-tmp.php');
	$body		= eregi_replace("[\]",'',$body);
	
	$vars 		= array('{nombre}','{apellido}','{asunto}','{mensaje}');
	$values 	= array($JSonData->nombre,$JSonData->apellido,$JSonData->asunto,$JSonData->mensaje);
	
	$body 		= str_replace($vars,$values,$body);


	$para      	= 'damian@wirallinteractive.com.ar';
	$titulo    	= $JSonData->asunto;
	$mensaje   	= $body;
	$cabeceras 	= 'From: webmaster@example.com' . "\r\n" .
	    		  'Reply-To: webmaster@example.com' . "\r\n" .
	    		  'X-Mailer: PHP/' . phpversion();


	if(mail($para, $titulo, $mensaje, $cabeceras)){
		$array = array("response" => "Error");
	}else{
		$array = array("response" => "Sent");
	}

	// Response
    echo json_encode($array);
	exit();








	// // PHPMailer Includes
 //    include "PHPMailer_v5.1/class.smtp.php"; 
	// include "PHPMailer_v5.1/class.phpmailer.php";   
	
	
	// // PHPMailer Configs
	// $mail = new PHPMailer();   
	
	// $body	= file_get_contents('email-contacto-tmp.php');
	// $body	= eregi_replace("[\]",'',$body);
	// //var_dump($body);
	
	// $mail->IsSMTP();
	// $mail->CharSet  = 'UTF-8';
	// $mail->SMTPAuth   = true;
	// $mail->SMTPSecure = "ssl"; 
	// $mail->Host 	= 'smtp.gmail.com';
	// $mail->Port 	= 465;
	// $mail->Username = "desarrollowirall1@gmail.com";
	// $mail->Password = 'P4ss10nfru1t';
	// $mail->From 	= "desarrollowirall1@gmail.com"; 
	// $mail->FromName = "Fabogesic"; 
	// $mail->WordWrap = 50;	 						// set word wrap 
	// $mail->Priority = 1; 
	// $mail->Subject 	= "Fabogesic - Contacto - (".$asunto.")";
	// $mail->IsHTML(true); 
	// $mail->AltBody = 'Para ver este mensaje, por favor use un el modo conpatible con HTML'; // optional - MsgHTML will create an alternate automatically

	// //setup vars to replace
	// $vars = array('{nombre}','{apellido}','{asunto}','{mensaje}');
	// $values = array($JSonData->nombre,$JSonData->apellido,$JSonData->asunto,$JSonData->mensaje);

	// //replace vars
	// $body = str_replace($vars,$values,$body);

 //  	$mail->MsgHTML($body);

	// $mail->AddAddress($email);

	// if(!$mail->Send()) { 
	// 	//echo "Mailer Error: " . $mail->ErrorInfo;
	// 	$array = array("response" => $mail->ErrorInfo);
	// } else { 
	// 	//echo "Enviados";
	// 	$array = array("response" => "ok");
	// }

	// // Response
 //    echo json_encode($array);

	
?>