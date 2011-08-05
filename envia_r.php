<?php
	/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
	if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
	else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
	
	$nome = $_POST['nome'];
	$remetente = 'contato@deblyn.com.br';
	$email = $_POS['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	$destinatario = 'deblynprado@gmail.com'; 
  	
	$mensagemHTML = '<p><b><i>'.$mensagem.'</i></b></p>';
	
	$headers = "MIME-Version: 1.1" .$quebra_linha;
	$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
	$headers .= "From: " . $destinatario.$quebra_linha;
	$headers .= "Reply-To: " . $remetente . $quebra_linha;
	
	if(!mail($destinatario, $assunto, $mensagemHTML, $headers ,"-r".$destinatario)){ // Se for Postfix
    $headers .= "Return-Path: " . $destinatario . $quebra_linha; // Se "não for Postfix"
    mail($destinatario, $assunto, $mensagemHTML, $headers );
	}
	
?>