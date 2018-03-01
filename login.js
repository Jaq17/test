var form = document.getElementById("form");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

function validaCadastro(evt){
	var usuario = document.getElementById('usuario');
	var senha = document.getElementById('senha');
	

	/* Validação do campo nome */
	caixa_usuario = document.querySelector('.msg-usuario');
	if(usuario.value == ""){
		caixa_usuario.innerHTML = "Favor preencher o Nome";
		caixa_usuario.style.display = 'block';
		contErro += 1;
	}else{
		caixa_usuario.style.display = 'none';
	}
	
	/* Validação do campo assunto */
	caixa_senha = document.querySelector('.msg-senha');
	if(senha.value == ""){
		caixa_senha.innerHTML = "Favor preencher o assunto";
		caixa_senha.style.display = 'block';
		contErro += 1;
	}else{
		caixa_senha.style.display = 'none';
	}
	