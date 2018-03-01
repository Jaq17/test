<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loja Beco Diagonal</title>

	
    </head>
    
    <body>
    	<?php

$para= "yagami.dora@hotmail.com";
$assunto= "contato pelo site ";
$nome=$_POST['nome'];
$email=$_POST['email'];

$mensagem=$_POST['mensagem'];

$corpo ="<strong> mensagem de contato</strong><br><br>";
$corpo .="<br><strong> nome:</strong>$nome";
$corpo .="<br><strong> email:</strong>$email";
$corpo .="<br><strong> mensagem:</strong>$mensagem";

$header= "Content-Type: text/html; charset= utf-8\n";
$header .=" From: $email Reply-to: $email\n";

@mail($para ,$assunto, $corpo,$header);

header("location;contato.html?mensagem=enviado");

if($corpo != ""){
	echo "sua mensagem foi enviada com sucesso!"; 
}

?>
<a href="contato.html"><input type="submit" value="voltar"></a>
    </body>
</html>