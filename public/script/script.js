$(document).ready(function () {
	duplicateElement();
});

function goToText(codText = 0) {
	let texts = ["#text-1", "#text-2", "#text-3"];
	let bars = ["#bar-1", "#bar-2", "#bar-3"];

	let activeIndex = bars.findIndex(bar => $(bar).hasClass("bar-active"));

	if (codText === 0) {
		codText = (activeIndex + 1) % texts.length + 1;
	}

	let textId = `#text-${codText}`;
	let barId = `#bar-${codText}`;

	texts.forEach(text => $(text).addClass("hidden"));
	bars.forEach(bar => $(bar).removeClass("bar-active"));

	$(textId).removeClass("hidden");
	$(barId).addClass("bar-active");
}


function duplicateElement() {
    const elemento = $(".marquee");
    const elementoConteudo = elemento.find(".marquee-content");
    const elementoFilhos = elementoConteudo.children();

    elementoFilhos.each(function () {
        const elementoDuplicado = $(this).clone(); 
        elementoConteudo.append(elementoDuplicado);
    });
}

// Fechar o Navbar caso o usuario clique fora da tela
$(document).click(function (event) {
    let $navbarNav = $("#navbarNav");
    let $toggler = $(".navbar-toggler");

    // Verifica se o menu está aberto
    if ($navbarNav.hasClass("show")) {
        // Se o clique for fora do menu e do botão, fecha o menu
        if (!$navbarNav.is(event.target) && !$navbarNav.has(event.target).length && 
            !$toggler.is(event.target) && !$toggler.has(event.target).length) {
            $navbarNav.collapse("hide");
        }
    }
});

function showToast(msg) {
    var toastEl = document.getElementById('myToast');
    var toast = new bootstrap.Toast(toastEl);
    $(".toast-body").text(msg);
    toast.show();
}

function sendAsyncData(formId, url) {
    $("#" + formId).submit(function (event) {
        event.preventDefault();
        
        let formData = new FormData(this);
        
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                showToast(data.message);
            },
            error: function (error) {
                console.error("Erro ao enviar o formulário:", error);
            }
        });
    });
}
