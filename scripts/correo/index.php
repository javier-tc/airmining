<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once'alertas1.php';


/* Clase para tratar con excepciones y errores */
require 'PHPMailer/src/Exception.php';
/* Clase PHPMailer */
require 'PHPMailer/src/PHPMailer.php';
/*Clase SMTP necesaria para conectarte a un servidor SMTP */
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$valores='';
	foreach ($datos as $mp) {
								
	$valores=$valores.'<tr><td>'.$mp['modelo'].'</td><td>'.$mp['variable'].'</td><td>'.$mp['estacion'].'</td><td>'.$mp['rango'].'</td><td>'.$mp['cant'].'</td><td>'.$mp['hora'].'</td></tr>';
				
	}
	$correos=array();

    $mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{	
				$BD_datos = "SELECT name,email FROM cprocl_particulas.users
				INNER JOIN users_proyectos on  users.id = users_proyectos.user_id
				WHERE sendmail=1
				and proyecto_id= 1";
				
				$result1 = $mysqli->query($BD_datos);
				
				if ($result1->num_rows > 0) {

					foreach ($result1 as $mp) {	
					
					
				$tmp = array(
							'name' => $mp['name'],
							'email' => $mp['email']);
		    			array_push($correos,$tmp);  
					}
				}
	}	




try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.airmining.ml ';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'no-reply@airmining.ml';                     //SMTP username
    $mail->Password   = 'Rojito.23#333';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


	foreach($correos as $recipient) {
	$mail->ClearAllRecipients();
	 $mail->setFrom('no-reply@airmining.ml', 'AirMining');
	$mail->addAddress($recipient['email'], $recipient['name']); // Add a recipient
	$mail->isHTML(true);
	$mail->Subject = 'AirMining - Alertas de calidad del Aire reportadas a la fecha';
	$mail->Body    = cuerpo($recipient['name']);
	
	
	
	if (! $mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else { 
	//echo 'Message has been sent';
	}
	
	}
				
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					

    
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//--------------------------------------------


function cuerpo($nombre){
	
global $valores;
	
$cuerpo='<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
        h1 {  color: white;font-size: 20px;font-family: monospace }
        #nota {  font-style: italic;color: #34495e  }
        
        #srt table{border: 1px solid #000000;border-collapse: collapse;color: #000000;font-family: "verdana";font-size: 12px;margin:0 auto 20px auto; text-align:center; width:750px}
    #srt td{border: 1px solid #4662C1;border-collapse: collapse;color: #000000;font-size: 13px;margin:0 auto 0 auto; padding:0 5px 0 5px}
    #srt th{border: 1px solid #4662C1;background:#008fc5;border-collapse: collapse;color: #ffffff;font-size: 14px; margin:0 auto 0 10px; padding:5px 5px 5px 5px}
    #srt b{font-size: 9px;}

    #srt p {font-size:9px; font-style:italic}
    #srt h7{font-size:22px;color:#CCCCCC;font-weight:bold}
    .dt1{width:20% }
    .dt2{width:30% }
    .dt3{width:10% }
    .dt4{width:375px; }
	</style>
</head>
<body style="margin:0;padding:0;">
	<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
		<tr>
			<td align="center" style="padding:0;">
				<table role="presentation" style="width:700px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
					<tr>
						<td style="background:#008fc5; " >
							<table style="width:100%; ">
								<tr>
									<td style="padding:0px 0px 0px 20px; ">
										<h1>Mensaje de Alerta</h1> <h1>Plataforma AirMining.</h1>
									</td>
									<td style="padding:0px,0px,0px,0px;width:50%;" align="right">
										<img src="imagen4.png" alt="" width="110" >
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="padding:0px 30px 42px 30px;">
                         
                            <p><b>Hola '.$nombre.'</b></p>
                            <p>Te informamos de las alertas levantadas por AirMining, en el proyecto a la fecha para las pr&oacute;ximas 24 horas:</p>

                            <div id="srt" >
                            <table id="tabla">
                                <tr><th>Modelo</th><th>Variable</th><th>Estaci&oacute;n</th><th>Rango [ug/m3]</th><th>Cantidad</th><th>Hora</th></tr>
                                '.$valores.'
                            </table>
                        </div>

                            <p>Te recomendamos ingresar al m&oacute;dulo Pron&oacute;stico en AirMining y consultar la informaci&oacute;n asociada a las alertas.</p>                              
							<p> No olvides revisar peri&oacute;dicamente AirMining, para estar al tanto de los indicadores de calidad del aire en tus proyectos.</p>

                            <p>Que tengas un excelente d&iacute;a!</p>
							
                            <p id="nota">Si tienes dudas escribenos! 
                                <a href="ww">http://airmining.ml/contact</a></p>

						</td>
					</tr>
					<tr>
                       <!--- style="background:#008fc5;background-color:#008fc5;width:100%" -->
						<td style="padding:30px;background:#008fc5;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
								<tr>
									<td style="padding:0;width:50%;" align="left">
										<p style="margin:0;font-size:16px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
											&reg; AirMining 2022<br/><a href="http://www.airmining.ml" style="color:#ffffff;text-decoration:underline;"></a>
										</p>
									</td>
									<td style="padding:0;width:50%;" align="right">
										<table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
											<tr>
                                                <td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.facebook.com/particulas.cl/" style="color:#ffffff;"><img src="www.airmining.ml/icons/fb.png" alt="FAcebook" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
                                                <td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.instagram.com/particulas.cl/" style="color:#ffffff;"><img src="www.airmining.ml/icons/inst.png" alt="Instagram" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
												<td style="padding:0 0 0 10px;width:38px;">
													<a href="https://twitter.com/Particuolotech" style="color:#ffffff;"><img src="www.airmining.ml/icons/tw.png" alt="Twitter" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
												<td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.linkedin.com/company/particuolotech" style="color:#ffffff;"><img src="www.airmining.ml/icons/in.png" alt="Linkedin" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>';
	
	return $cuerpo;
}



//--------------------------------------------









?>