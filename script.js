$(document).ready(()=> {
	criarEstrelas();
	setInterval(criarEstrelasCadentes, 3000);
	duplicar_elemento();
});

const ceuEstrelado = $('#ceu-estrelado');

function criarEstrelas() {
	const contador_estrelas = 200;
	for (let i = 0; i < contador_estrelas; i++) {
		const estrela = document.createElement('div');
		$(estrela).addClass('estrela');
		$(estrela).css('top', `${Math.random() * 100}vh`);
		$(estrela).css('left', `${Math.random() * 100}vw`);
		$(estrela).css('animationDelay', `${Math.random() * 2}s`);
		ceuEstrelado.append(estrela);
	}
}

function criarEstrelasCadentes() {
	const contador_estrelas_cadentes = 1;
	for (let i = 0; i < contador_estrelas_cadentes; i++) {
		const estrela_cadente = document.createElement('div');
		$(estrela_cadente).addClass('estrela-cadente');
		$(estrela_cadente).css('top', `${Math.random() * 50}vh`);
		$(estrela_cadente).css('left', `${Math.random() * 100}vw`);
		$(estrela_cadente).css('animationDelay', `${Math.random() * 1}s`);
		$(ceuEstrelado).append(estrela_cadente);

		// Remover a estrela após a animação terminar para evitar acúmulo
		setTimeout(() => estrela_cadente.remove(), 2000);
	}
}

// "https://mail.google.com/mail/?view=cm&fs=1&to=mruan309@gmail.com&su=Contato%20atrav%C3%A9s%20do%20portf%C3%B3lio&body=Ol%C3%A1%20Ruan,%20venho%20atrav%C3%A9s%20de%20seu%20portf%C3%B3lio,%20podemos%20conversar%3F"
$('#enviarEmail').click(function (e) { 
	e.preventDefault();
	function oconstbterSaudacao() {
		var hora = new Date().getHours();
		if (hora < 12) {
			return "Bom dia";
		} else if (hora < 18) {
			return "Boa tarde";
		} else {
			return "Boa noite";
		}
	}

	const saudacao = obterSaudacao();
	const mensagem = "Ruan, " + saudacao + "!\n\n" +
				   "Venho através de seu portfólio, podemos conversar?\n\n" +
				   "Desde já, obrigado.";

	const mensagemCodificada = encodeURIComponent(mensagem);

	const mailtoLink = "https://mail.google.com/mail/?view=cm&fs=1&to=mruan309@gmail.com&su=Contato%20atrav%C3%A9s%20do%20portf%C3%B3lio&body=" + mensagemCodificada;

	window.open(mailtoLink, '_blank');
});

function duplicar_elemento() {
    const elemento = $(".marquee");
    const elementoConteudo = elemento.find(".marquee-content");
    const elementoFilhos = elementoConteudo.children();

    elementoFilhos.each(function () {
        const elementoDuplicado = $(this).clone(); 
        elementoConteudo.append(elementoDuplicado);
    });

}
