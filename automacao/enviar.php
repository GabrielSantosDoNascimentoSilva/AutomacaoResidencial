<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = "AutomaçãoResidencial"; 
    $to = "tiagomaffi@hotmail.com"; 
    $subject =  $_POST['subject'];
    $br ="\n";
			
	
    $headers  = "MIME-Version: 1.1 $br";
    $headers .= "Content-type: text/html; charset=iso-8859-1 $br";
    $headers .= "From: $from";
    $headers .= "Return-Path: $email $br";
    $headers .= "Reply-To: $email";

mail($to, $subject, $message, $headers, '-r'. $email);
echo "<script type='text/javascript'>alert('Mensagem enviada com sucesso!!!.');";//window.location='contact.html';</script>";

?>
