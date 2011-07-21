<?php require_once("header.php")?>
	<form class="contato" name="contato" method="post" action="enviar.php"> 
			<label>Nome: </label><input type="text" name="nome" size="53" /><br class="clear" /> 
			<label>Email: </label><input type="text" name="email" size="53" /><br class="clear" /> 
			<label>Assunto: </label><input type="text" name="assunto" size="53" /><br class="clear" /> 
			<label>Mensagem: </label><textarea name="mensagem" cols="50" rows="7" ></textarea><br class="clear" /> 
			<input type="submit" class="botao" name="enviar" value="Enviar" /> 
		</form> 
<?php require_once("footer.php")?>