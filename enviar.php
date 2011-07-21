<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$para = 'deblynprado@gmail.com'; 
	$assunto = '$assunto';
	$cabecalho = "MIME-Version: 1.0" . "\r\n".
				 "Content-type: text/html; charset=iso-8859-1" . "\r\n".
			   	 "From: $email" . "\r\n" .
				 "Reply-To: deblyn@deblyn.com";

	$corpoDoEmail = $nome . "<br />";
	$corpoDoEmail .= $email . "<br />";
	$corpoDoEmail .= $assunto . "<br /><br />";
	$corpoDoEmail .= $mensagem;
			 
	$status = mail($para, $assunto, $corpoDoEmail, $cabecalho);
	
	if($status)
		echo "<script> alert('Mensagem enviada com sucesso!.'); </script>";
	else
		echo "<script> alert('A Mensagem não foi enviada, por favor tente novamente!'); </script>";
?>