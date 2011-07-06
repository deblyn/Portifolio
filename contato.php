<?php require_once("header.php")?>
	<form action="" id="contato">
    	<label>Nome:</label><input type="text" name="nome"/>
        <label>Email: </label><input type="text" name="email"/>
        <label>Assunto: </label><input type="text" name="assunto"/>
        <textarea cols="50" rows="20" name="conteudo" ></textarea>
        <input type="submit" value="Enviar">
    </form>
<?php require_once("footer.php")?>