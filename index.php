<?php
    include_once 'biblioteca.php';

    $conexao = conectarBanco();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loja Beco Diagonal</title>
        <link href="estilo.css" type="text/css" rel="stylesheet"> 
		<nav>
			<button type="button" id="login"><a href="login.php">Login</a></button>
			<button type="button" id="cad">Cadastro</button>
		
		</nav> 
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
        
        
        <!--primeira categoria-->
       <section>
        <div class="camis">
       <p> <a href="camisetas.html"> Camisetas</a></p>
        	<div id="esquerda">
            	<div id="coluna01">
               		 <img src="img/camiseta5.jpg"width="200px" height="232px">
                	<h3>Camiseta Dead Pool</h3>
                    Disponível nos tamanhos: P , M e G.
                    Cor: Preto.
                    valor: R$29,90
					
                </div>
                
                <div id="coluna02">
                	<img src="img/camiseta20.jpg" width="200px" height="232px">
                	 <h3>Camiseta Star Wars</h3>
                    Disponível nos tamanhos: P , M e G.
                    Cor: Branca.
                    valor: R$29,90
					
                </div>  
            </div>
            
            <div id="direita">
            
            	<div id="coluna03"> 
                 	<img src="img/camiseta25.jpg"width="200px" height="232px">
                	<h3>Camiseta Bazinga</h3>
                    Disponível nos tamanhos: P , M e G.
                    Cor: vermelho.
                    valor: R$29,90
				
                  
                </div>
                <div id="coluna04">
                	<img src="img/camiseta8.jpg"width="200px" height="232px">
                	<h3>Camiseta Goku</h3>
                    Disponível nos tamanhos: P , M e G.
                    Cor: Preto.
                    valor: R$29,90
					
                    
                </div>
            </div>
        </div>
        </section>
        
        
        
        
        <!-- segunda categoria-->
        	<section>
        <div class="camis">
        <p> <a href="acessorios.html"> Acessórios</a></p>
        	<div id="esquerda">
         
            	<div id="coluna01">
               		 <img src="img/a11.jpg" width="200px" height="232px">
                	<h3>Pulseira Supernatural</h3>
                    Disponível nos tamanhos: único.
                    Cor: Prata.
                    valor: R$19,90
					
                </div>
                
                <div id="coluna02">
                	<img src="img/a10.jpg"width="200px" height="232px">
                	 <h3>Colar Supernatural</h3>
                    Disponível nos tamanhos: único.
                    Cor: Prata.
                    valor: R$19,90
                </div>  
            </div>
            
            <div id="direita">
            
            	<div id="coluna03"> 
                	<img src="img/a13.jpg"width="200px" height="232px">
                	<h3>Pulseira Harry Potter</h3>
                    Disponível nos tamanhos: único.
                    Cor: Preto e dourado.
                 	valor: R$19,90
				
                  
                </div>
                <div id="coluna04">
					<img src="img/a4.jpg"width="200px" height="232px">
                	<h3>Colar Dead Pool</h3>
                    Disponível nos tamanhos: único.
                    Cor: Prata.
                    valor: R$19,90
                </div>
            </div>
        </div>
        </section>
        
        
        
        <!-- terceira categoria -->
        <section>
        <div class="camis">
         <p> <a href="colecionaveis.html"> Colecionáveis</a></p>
        	<div id="esquerda">
         
            	<div id="coluna01">
               		 <img src="img/f1.jpg"width="200px" height="232px">
                	<h3>Funko Pop Chuck</h3>
                    Disponível nos tamanhos: 10 cent.
                    valor: R$99,90
                    
                </div>
                
                <div id="coluna02">
                	<img src="img/f2.jpg"width="200px" height="232px">
                	 <h3>Funko Pop Batman</h3>
                    Disponível nos tamanhos: 10 cent.
                    valor: R$99,90
                </div>  
            </div>
            
            <div id="direita">
            
            	<div id="coluna03"> 
                 	<img src="img/f3.jpg"width="200px" height="232px">
                	<h3>Funko Pop Sebastian</h3>
                    Disponível nos tamanhos: 10 cent.
                    valor: R$99,90
                </div>
                <div id="coluna04">
                	<img src="img/f4.jpg"width="200px" height="232px">
                	<h3>Funko Pop L </h3>
                    Disponível nos tamanhos: 10 cent. 
                    valor: R$99,90                    
                </div>
            </div>
        </div>
        </section>
         
         <div id="rodape">     
       			<p>Loja Beco Diagonal<br>   
           	Localizada na rua 1000 n°00 bairro: exemplo<br>
      	 Telefone:(47) 99999-9999  | lojabecodiagonal@exemplo.com<br>
       Empresa Fictícia | Projeto Integrador 2017 </p>
	   
</div>
</html>