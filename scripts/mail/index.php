<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


/* Clase para tratar con excepciones y errores */
require 'PHPMailer/src/Exception.php';
/* Clase PHPMailer */
require 'PHPMailer/src/PHPMailer.php';
/*Clase SMTP necesaria para conectarte a un servidor SMTP */
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//--------------------------------------------

$cuerpo='<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
        h1 {  color: white;font-size: 20px;font-family: monospace }
        #nota {  font-style: italic;color: #34495e  }
        
        #srt table{border: 1px solid #000000;border-collapse: collapse;color: #000000;font-family: "verdana";font-size: 12px;margin:0 auto 20px auto; text-align:center; width:550px}
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
				<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
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
                         

                            <p><b>Hola Fidel Vallejo</b></p>
                            <p>Te informamos de las alertas levantadas por AirMining, en el proyecto a la fecha para las próximas 24 horas:</p>

                            <div id="srt" >
                            <table id="tabla">
                                <tr><th>Estaci&oacute;n</th><th>Variable</th><th>Modelo</th><th>Rango [ug/m3]</th><th>Hora</th></tr>
                                <tr><td>Sta. Margarita</td><td>	Dióxido de azufre</td><td>Numérico</td><td>entre 200 - 300</td><td>22:00hrs</td></tr>
                            </table>
                        </div>

                            <p>Te recomendamos ingresar al m&oacute;dulo Pronóstico en AirMining y consultar la información asociada a las alertas.</p>                              
							<p> No olvides revisar periódicamente AirMining, para estar al tanto de los indicadores de calidad del aire en tus proyectos.</p>

                            <p>¡Que tengas un excelente día!</p>


                            <p id="nota">¡Si tienes dudas escribenos! 
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
													<a href="https://www.facebook.com/particulas.cl/" style="color:#ffffff;"><img src="icon/fb2.png" alt="FAcebook" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
                                                <td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.instagram.com/particulas.cl/" style="color:#ffffff;"><img src="icon/inst2.png" alt="Instagram" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
												<td style="padding:0 0 0 10px;width:38px;">
													<a href="https://twitter.com/Particuolotech" style="color:#ffffff;"><img src="icon/tw2.png" alt="Twitter" width="30" style="height:auto;display:block;border:0;" /></a>
												</td>
												<td style="padding:0 0 0 10px;width:38px;">
													<a href="https://www.linkedin.com/company/particuolotech" style="color:#ffffff;"><img src="icon/in2.png" alt="Linkedin" width="30" style="height:auto;display:block;border:0;" /></a>
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
//--------------------------------------------







try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.cattlerpro.cl';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'no-reply@airmining.ml';                     //SMTP username
    $mail->Password   = 'Rojito.23#333';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('no-reply@cattlerpro.cl', 'AirMining');
    $mail->addAddress('ralveal.o@gmail.com');               //Name is optional
   //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('icon/tw2.png');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'AirMining - Alertas de calidad del Aire reportadas a la fecha';
    $mail->Body    = $cuerpo;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>