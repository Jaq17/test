<!DOCTYPE html>
<html>
<head>
    <title>Loja Beco Diagonal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
	<style> span {color:red;} </style>				
</head>


<body>
	

	<div id="banner">
        <img src="img/o3.jpg"width="930px" height="300px">
        </div>
        
        <div>
         <a href="index.php">Página Inicial</a>
        <a href="empresa.html">Empresa</a>
        <a href="galeria.html">Galeria</a>
        <a href="regras.html">Regras</a>
        <a href="pagamento.html">Pagamento</a>
        <a href="contato.html">Contato</a>
        </div>
		
		
		<h5> Login </h5>
	<section >
        <form id="form" action="" method="post">
      	<fieldset>
          <label  id="usuario">Usuário:</label><input type="text" placeholder="Usuário">
		          <span class='msg-erro msg-usuario'></span>

		  <br><br>
          <label id="senha">Senha:</label><input type="password" placeholder="Senha">
		          <span class='msg-erro msg-senha'></span>

         <br><br>
      
          <input type="submit" value="Logar"></input>
		<button value="" ><a href="index.php">voltar</a></button>
         </fieldset>
      </form>
	 </section>
		
		
		
		
		
		<div id="rodape">
       		<p>Loja Beco Diagonal<br>   
           	Localizada na rua 1000 n°00 bairro: exemplo<br>
      	 Telefone:(47) 99999-9999  | lojabecodiagonal@exemplo.com<br>
       Empresa Fictícia | Projeto Integrador 2017 </p>

        
         </div>

		 <script type="text/javascript" src="login.js"></script>
		 
</body>
</html>