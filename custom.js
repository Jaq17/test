
var form = document.getElementById("form");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var nome = document.getElementById('nome');
	var assunto = document.getElementById('assunto');
	var email = document.getElementById('email');
	var mensagem = document.getElementById('mensagem');

	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro = 0;


	/* Validação do campo nome */
	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value == ""){
		caixa_nome.innerHTML = "Favor preencher o Nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}
	
	/* Validação do campo assunto */
	caixa_assunto = document.querySelector('.msg-assunto');
	if(nome.value == ""){
		caixa_assunto.innerHTML = "Favor preencher o assunto";
		caixa_assunto.style.display = 'block';
		contErro += 1;
	}else{
		caixa_assunto.style.display = 'none';
	}
	
	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "Favor preencher o E-mail";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(filtro.test(email.value)){
		caixa_email.style.display = 'none';
	}else{
		caixa_email.innerHTML = "Formato do E-mail inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}	

	/* Validação do campo mensagem */
	caixa_mensagem = document.querySelector('.msg-mensagem');
	if(mensagem.value == ""){
		caixa_mensagem.innerHTML = "Favor preencher o mensagem";
		caixa_mensagem.style.display = 'block';
		contErro += 1;
	}else{
		caixa_mensagem.style.display = 'none';
	}
	

	if(contErro > 0){
		evt.preventDefault();
	}
}