<?php

ini_set('display_errors',1);
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");

//https://www.google.com/settings/security/lesssecureapps
//http://phpmailer.worxware.com/

//function send($correo,$nombre,$descripcion)
//{
//	$mail = new PHPMailer() ;
//
//	$body = '<table width="537" height="662" border="1">
//  <tbody>
//    <tr>
//      <td width="253" height="94">Buenas tardes señor '.$nombre.'</td>
//      <td width="557">'.$descripcion.'</td>
//    </tr>
//    <tr>
//      <td colspan="2"><img src="http://www.comolohicieron.com.mx/wp-content/uploads/2015/03/Screen-Shot-2015-03-29-at-3.36.49-PM-816x497.png"></td>
//    </tr>
//  </tbody>
//</table>';
//				 				 
//		$body .= "";
//
//		$mail->IsSMTP(); 
//
//		//Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP
//		$mail->Host = "mail.comolohicieron.com.mx";
//		$mail->Port       = 587;  
//		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//		
//		//Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
//		$mail->From     = "martin@comolohicieron.com.mx";
//		$mail->FromName = "Martin Flores";
//		$mail->Subject  = "Hola este es una prueba de mail";
//		$mail->AltBody  = "Leer"; 
//		$mail->MsgHTML($body);
//
//		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
//		$mail->AddAddress($correo,'');
//		$mail->SMTPAuth = true;
//
//		// Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 
//
//		$mail->Username = "sucuenta@comolohicieron.com.mx";
//		$mail->Password = "********"; 
//
//		if($mail->Send())
//		{
//			//return true;
//			
//			return $body; 
//		}else
//		{
//			return false;
//			die();
//		}
//	}

	$mail = new PHPMailer() ;

	$body = "<body style='background-color:powderblue;'>
	
	Hola, Estimado <strong>'. $nombre .'</strong>
	
	<p>Le informamos que su transferencia a <strong>'. $cuenta. '</strong> numero de cuenta <strong>'. $ncuenta.'</strong> fue procesada bajo el número <strong>comprobante</strong> de Banesco</p>
	
	<p>Adjunta se encuentra su boleta por el servicio prestado</p>
	
	<p>Gracias por la confianza</p>
	
	<p>Equipo Aguacatecambios</p>
	</body>";
	
				 				 
		$body .= "";

		$mail->IsSMTP(); 

		//Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP
 		$mail->Host = "smtp.gmail.com";		
		$mail->Port       = 465;  
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; 
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		
		//Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
		$mail->From     = "aguacatecambios@gmail.com";
		$mail->FromName = "Aguacatecambios";
		$mail->Subject  = "Hola este es una prueba de mail";
		$mail->AltBody  = "Leer"; 
		$mail->MsgHTML($body);

		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
		$mail->AddAddress('julioj.lopeza@gmail.com','Julio');
		$mail->SMTPAuth = true;

		// Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 
		$mail->Username = "aguacatecambios@gmail.com";
		$mail->Password = "edu19471962"; 
		if($mail->Send())
		{			
			return $body; 
		}else
		{
			return false;
			die();
		}
	



$html = sendgmail($email,$nombre,$descripcion);


mysqli_close($conexion);

?>