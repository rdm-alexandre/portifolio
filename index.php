<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="public/styles/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="shortcut icon" href="public/images/logo.png" type="image/x-icon">
	<title>Portifolio</title>
</head>
<script>
	$(document).ready(function () {
		sendAsyncData("contactForm", "controller/contactValidation.php");
	});
</script>
<body class="mb-0 mx-lg-5 mt-3">
	<main class="container-fluid">
		<nav class="navbar navbar-expand-md mb-sm-4" style="position: fixed; width: 94%; z-index:1000; background: #fff;">
			<div class="container-fluid">
				<a class="navbar-brand me-2" href="#home">
					<img class="navbar-image" src="public/images/avatar.jpeg" alt="Meu Avatar" loading="lazy"/>
				</a>
				
				<button class="navbar-toggler navbar-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
					<div class="d-flex mx-auto navbar-content-links">
						<a class="navbar-brand me-5 font-poppins poppins-bold nav-link" href="#about">Sobre</a>
						<a class="navbar-brand font-poppins poppins-bold nav-link" href="#soluctions">Soluções</a>
					</div>
					<div class="d-flex navbar-content-contact">
						<a class="font-bold nav-link-button pulsing px-5 py-3" href="#contact" id="link-contact">
							Entrar em Contato
						</a>
					</div>
				</div>
			</div>
		</nav>
		<section id="home">
			<div class="row align-items-center fade-in" style="height: 100%;">
				<div class="col-12 col-lg-6">
					<div class="text-center">
						<h1 class="p-0" id="h1-title">RM ALEXANDRE</h1>
						<span class="span-subtitle font-signica-negative signica-negative-bold p-0 mt-sm-5">TRANSFORMANDO SUA IDEIA EM REALIDADE!</span>
					</div>
				</div>
				<div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-center" id="home-img-tree">
					<img class="w-100 floating" src="public/images/tree.png" alt="Foto Arvore">
				</div>
				<div class="col-12 marquee">
					<div class="marquee-content">
						<img class="imagem-ferramenta" src="public/images/git_hub.png">
						<img class="imagem-ferramenta" src="public/images/html.png">
						<img class="imagem-ferramenta" src="public/images/css.png">
						<img class="imagem-ferramenta" src="public/images/php.png">
						<img class="imagem-ferramenta" src="public/images/bootstrap.png">
						<img class="imagem-ferramenta" src="public/images/docker.png">
						<img class="imagem-ferramenta" src="public/images/javascript.png">
						<img class="imagem-ferramenta" src="public/images/jquery.png">
						<img class="imagem-ferramenta" src="public/images/linux.png">
						<img class="imagem-ferramenta" src="public/images/git.png">
						<img class="imagem-ferramenta" src="public/images/sql.png">
						<img class="imagem-ferramenta" src="public/images/git_hub.png">
						<img class="imagem-ferramenta" src="public/images/html.png">
						<img class="imagem-ferramenta" src="public/images/css.png">
						<img class="imagem-ferramenta" src="public/images/php.png">
						<img class="imagem-ferramenta" src="public/images/bootstrap.png">
						<img class="imagem-ferramenta" src="public/images/docker.png">
						<img class="imagem-ferramenta" src="public/images/javascript.png">
						<img class="imagem-ferramenta" src="public/images/jquery.png">
						<img class="imagem-ferramenta" src="public/images/linux.png">
						<img class="imagem-ferramenta" src="public/images/git.png">
						<img class="imagem-ferramenta" src="public/images/sql.png">
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="fade-in-scroll">
			<div class="row align-items-center justify-content-center">
				<div class="col-auto">
					<div class="text-center">
						<h1 class="p-0">SOBRE</h1>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-between">
				<div class="col-12 col-lg-5 d-flex">
					<img class="floating" src="public/images/about-us.png" alt="Foto Arvore" style="width: 100%;">
				</div>

				<div class="d-flex col-12 col-lg-6 justify-content-center justify-content-lg-end align-items-center">
					<div class="col-11 col-lg-8 about-content justify-content-center align-items-center">
						<span id="text-1" class="about-text fade-in">Olá, sou Ruan! Desenvolver software não é só minha profissão, é minha paixão. Gosto de transformar ideias em soluções funcionais, criando sistemas que realmente fazem a diferença no dia a dia das pessoas e empresas.</span>
						<span id="text-2" class="about-text hidden fade-in">Acredito que cada projeto tem sua própria história. Meu papel é entender essa essência e traduzi-la em código, com eficiência e qualidade. Seja um site, um sistema ou uma solução sob medida, meu foco é sempre criar algo útil e bem-feito.</span>
						<span id="text-3" class="about-text hidden fade-in">Tecnologia vai além de linhas de código – é sobre resolver problemas e conectar pessoas. Se você tem uma ideia e quer tirá-la do papel, vamos conversar! <br><div class="text-center">Quem sabe não criamos algo incrível juntos?</div></span>
						<div class="d-flex justify-content-center mt-5" style="gap: 40px;">
							<button id="bar-1" class="bar rounded bar-active" onclick="goToText(1)"></button>
							<button id="bar-2" class="bar rounded" onclick="goToText(2)"></button>
							<button id="bar-3" class="bar rounded" onclick="goToText(3)"></button>
						</div>
					</div>

					<div class="d-none d-lg-block">
						<button style="border: none; background: none" onclick="goToText()">
							<svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="43.5" cy="43.5" r="43" fill="white" stroke="#007BFF"/>
								<path d="M69.1776 39.074C73.1673 41.4011 73.1417 47.1745 69.1315 49.4662L34.5436 69.2317C30.5334 71.5233 25.5462 68.6144 25.5667 63.9957L25.7432 24.1589C25.7637 19.5401 30.7765 16.6756 34.7662 19.0027L69.1776 39.074Z" fill="#0056B3"/>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</section>

		<section id="soluctions">
			<div class="row align-items-center justify-content-center mb-5">
				<div class="col-auto slide-left-scroll">
					<div class="text-center">
						<h1 class="p-0">SOLUÇÕES</h1>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-lg-between justify-content-center mb-5 pt-5 slide-left-scroll">
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/16997466829?text=Ol%C3%A1%20Ruan,%20Notei%20que%20voc%C3%AA%20desenvolve%20softwares,%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Softwares Sob Medida</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Desenvolvo sistemas personalizados que se adaptam perfeitamente às suas necessidades, garantindo eficiência e escalabilidade.</span>
					</div>
				</div>
				<div class="col-12 col-lg-5 d-flex d-none d-lg-flex justify-content-end">
					<img src="public/images/computer.png" alt="Computador" class="soluctions-image">
				</div>
			</div>

			<div class="row align-items-center justify-content-lg-between justify-content-center mb-5 slide-right-scroll">
				<div class="col-12 col-lg-5 d-none d-lg-flex">
					<img src="public/images/web-interface.png" alt="Usuário mexendo na web" class="soluctions-image">
				</div>
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/16997466829?text=Ol%C3%A1%20Ruan,%20notei%20que%20voc%C3%AA%20desenvolve%20sites%20e%20landing%20pages,%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Sites e Landing Pages</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Crio sites modernos, responsivos e otimizados para conversão, proporcionando uma experiência impactante para seus usuários.</span>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-lg-between justify-content-center mb-5 slide-left-scroll">
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/16997466829?text=Ol%C3%A1%20Ruan,%20notei%20que%20voc%C3%AA%20desenvolve%20aplicativos%20mobile,%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Aplicativos Mobile</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Desenvolvo aplicativos intuitivos e funcionais para Android e iOS, focando em usabilidade e desempenho.</span>
					</div>
				</div>
				<div class="col-12 col-lg-5 d-none d-lg-flex d-flex justify-content-center justify-content-lg-end">
					<img src="public/images/mobile-interface.png" alt="Computador" class="soluctions-image">
				</div>
			</div>

			<div class="row align-items-center justify-content-center justify-content-lg-between mb-5 slide-right-scroll">
				<div class="col-12 col-lg-5 d-none d-lg-flex">
					<img src="public/images/software-construction.png" alt="Software sendo construído" class="soluctions-image">
				</div>
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/16997466829?text=Ol%C3%A1%20Ruan,%20notei%20que%20voc%C3%AA%20trabalha%20com%20arquitetura%20de%20software,%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Arquitetura de Software</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Avalio e otimizo a estrutura do seu software, garantindo que ele esteja preparado para suportar crescimento e inovação.</span>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-lg-between justify-content-center mb-5 slide-left-scroll">
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/16997466829?text=Ol%C3%A1%20Ruan,%20notei%20que%20voc%C3%AA%20liga%20sistemas%20atrav%C3%A9s%20de%20API,%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Integração de Sistemas e APIs</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Conecto diferentes sistemas e plataformas, melhorando a automação de processos e a eficiência operacional.</span>
					</div>
				</div>
				<div class="col-5 d-none d-lg-flex justify-content-center justify-content-lg-end">
					<img src="public/images/system-upgrade.png" alt="Atualização do sistema" class="soluctions-image">
				</div>
			</div>

			<div class="row align-items-center justify-content-lg-between justify-content-center mb-5 slide-right-scroll">
				<div class="col-12 col-lg-5 d-none d-lg-flex">
					<img src="public/images/software-maintenance.png" alt="Software em manutenção" class="soluctions-image">
				</div>
				<div class="col-12 col-lg-7">
					<a class="soluctions-link" href="https://wa.me/5516997466829?text=Ol%C3%A1%20Ruan%2C%20notei%20que%20voc%C3%AA%20d%C3%A1%20manuten%C3%A7%C3%A3o%20em%20sistemas%2C%20podemos%20conversar%3F" target="_blank">
						<div class="soluctions-subtitle">
							<div>
								<span class="soluctions-subtitle-content font-signica-negative signica-negative-bold">Suporte e Manutenção</span>
							</div>
							<div>
								<img src="public/images/whatsapp-icon.png" alt="Link Para Whatsapp" class="button-whatsapp">
							</div>
						</div>
					</a>
					<div class="ms-3">
						<span class="soluctions-text">Corrijo falhas e implemento melhorias para manter seu software sempre seguro e atualizado.</span>
					</div>
				</div>
			</div>

		</section>

		<section id="contact">
			<div class="row align-items-center justify-content-center mb-5">
				<div class="col-auto">
					<div class="text-center">
						<h1 class="p-0">Vamos Conversar?</h1>
					</div>
				</div>
			</div>
			<div class="row justify-content-center justify-content-lg-between">
				<div class="col-12 col-lg-5">
					<form method="post" id="contactForm">
						<div class="p-5 text-center contact-form-content">
							<h2 class="fw-bold font-signica-negative signica-negative-bold contact-form-subtitle mb-5">FALE CONOSCO</h2>
							<div class="mb-3 d-flex justify-content-center">
								<input type="text" name="name" class="form-control contact-form-input font-signica-negative signica-negative-regular" placeholder="Nome*" required>
							</div>
							<div class="mb-3 d-flex justify-content-center">
								<input type="phone" name="phone" class="form-control contact-form-input font-signica-negative signica-negative-regular" placeholder="Telefone*" required>
							</div>
							<div class="mb-3 d-flex justify-content-center">
								<input type="email" name="email" class="form-control contact-form-input font-signica-negative signica-negative-regular" placeholder="E-mail*" required>
							</div>
							<div class="mb-3 d-flex justify-content-center">
								<textarea name="description" class="form-control contact-form-textarea font-signica-negative signica-negative-regular" rows="3" placeholder="Olá, Gostaria de saber mais sobre os serviços." required></textarea>
							</div>
							<button type="submit" class="btn btn-primary font-signica-negative signica-negative-bold contact-form-button mt-5">Enviar</button>
						</div>
					</form>
				</div>
				<div class="col-6 d-none d-lg-flex justify-content-end">
					<svg alt="Homem no celular" style="width: 80%;" class="animated" id="freepik_stories-digital-tools" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><g id="freepik--background-simple--inject-61" class="animable animator-active" style="transform-origin: 252.3px 248.056px;"><path d="M432.29,123.05q-4.41-2.52-8.76-5.14C392.31,99,246.43,13.5,188.3,26.29,123,40.65-1.89,266.86,38.19,328.55s226,160.76,272,139.68,159-225.88,163.67-274.55C477.86,152.12,442.67,128.94,432.29,123.05Z" style="fill: rgb(0, 123, 255); transform-origin: 252.3px 248.056px;" id="elwxozppum9ro" class="animable"></path><g id="el03sbw2l3dccp"><path d="M432.29,123.05q-4.41-2.52-8.76-5.14C392.31,99,246.43,13.5,188.3,26.29,123,40.65-1.89,266.86,38.19,328.55s226,160.76,272,139.68,159-225.88,163.67-274.55C477.86,152.12,442.67,128.94,432.29,123.05Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 252.3px 248.056px;" class="animable"></path></g></g><g id="freepik--Shadow--inject-61" class="animable" style="transform-origin: 235.64px 440.45px;"><g id="elfjohsxtrc9"><ellipse cx="235.64" cy="440.45" rx="165.45" ry="30.33" style="opacity: 0.3; transform-origin: 235.64px 440.45px;" class="animable"></ellipse></g></g><g id="freepik--Lines--inject-61" class="animable" style="transform-origin: 246.07px 187.81px;"><line x1="91.7" y1="262.31" x2="234.47" y2="245.37" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 163.085px 253.84px;" id="elfplsd1ov768" class="animable"></line><line x1="95.73" y1="199.22" x2="238.69" y2="232.1" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 167.21px 215.66px;" id="ely7gogcsa05l" class="animable"></line><line x1="118.55" y1="146.19" x2="232.65" y2="216" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 175.6px 181.095px;" id="elh9y93qoeyf" class="animable"></line><line x1="182.31" y1="141.5" x2="246.07" y2="213.98" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 214.19px 177.74px;" id="elws8rvd8wvtq" class="animable"></line><line x1="250.77" y1="93.17" x2="250.77" y2="211.3" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 250.77px 152.235px;" id="elkm89qm8a1c" class="animable"></line><line x1="353.45" y1="89.15" x2="265.53" y2="214.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 309.49px 151.9px;" id="eljbm8sl841c9" class="animable"></line><line x1="400.44" y1="135.46" x2="270.23" y2="223.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 335.335px 179.42px;" id="elz3sv40vkixg" class="animable"></line><line x1="397.08" y1="203.91" x2="272.91" y2="234.12" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 334.995px 219.015px;" id="eloh9cjb5golq" class="animable"></line><line x1="394.4" y1="286.47" x2="278.28" y2="249.55" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 5, 5; transform-origin: 336.34px 268.01px;" id="elxd6tcwqpd1n" class="animable"></line></g><g id="freepik--Calculator--inject-61" class="animable" style="transform-origin: 419.54px 287.5px;"><rect x="399.44" y="269.29" width="40.2" height="36.42" rx="8.27" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 419.54px 287.5px;" id="eljcvvtdq7n1" class="animable"></rect><rect x="420.71" y="278.6" width="11.94" height="2.31" style="fill: rgb(38, 50, 56); transform-origin: 426.68px 279.755px;" id="el1lpdu3x4oxd" class="animable"></rect><rect x="420.71" y="291.94" width="11.94" height="2.31" style="fill: rgb(38, 50, 56); transform-origin: 426.68px 293.095px;" id="ela9o2wxj9dnj" class="animable"></rect><polygon points="411.65 273.78 409.34 273.78 409.34 278.6 404.53 278.6 404.53 280.91 409.34 280.91 409.34 285.73 411.65 285.73 411.65 280.91 416.47 280.91 416.47 278.6 411.65 278.6 411.65 273.78" style="fill: rgb(38, 50, 56); transform-origin: 410.5px 279.755px;" id="elx3fkhdtko3j" class="animable"></polygon><polygon points="413.9 289.17 410.5 292.58 407.09 289.17 405.46 290.81 408.86 294.21 405.46 297.62 407.09 299.25 410.5 295.85 413.9 299.25 415.54 297.62 412.13 294.21 415.54 290.81 413.9 289.17" style="fill: rgb(38, 50, 56); transform-origin: 410.5px 294.21px;" id="elwtgvufvvl4l" class="animable"></polygon><circle cx="427.01" cy="289.48" r="1.56" style="fill: rgb(38, 50, 56); transform-origin: 427.01px 289.48px;" id="eljija0tz6ys" class="animable"></circle><circle cx="427.01" cy="297.04" r="1.56" style="fill: rgb(38, 50, 56); transform-origin: 427.01px 297.04px;" id="el1k3vw9ot3vl" class="animable"></circle></g><g id="freepik--Alarm--inject-61" class="animable" style="transform-origin: 425.92px 198.75px;"><g id="eltqouq15m9jn"><circle cx="425.92" cy="198.75" r="21.71" style="fill: rgb(255, 255, 255); transform-origin: 425.92px 198.75px; transform: rotate(-8.96deg);" class="animable"></circle></g><path d="M425.92,222.33a23.58,23.58,0,1,1,23.58-23.58A23.6,23.6,0,0,1,425.92,222.33Zm0-43.42a19.85,19.85,0,1,0,19.84,19.84A19.87,19.87,0,0,0,425.92,178.91Z" style="fill: rgb(0, 123, 255); transform-origin: 425.92px 198.75px;" id="eluxep3proe3k" class="animable"></path><path d="M437.88,206.31c-1.69,0-2.49-.6-2.85-1.34V194.72a8.24,8.24,0,0,0-5.27-7.68,2.44,2.44,0,0,0,.06-.55,2.59,2.59,0,0,0-2.6-2.6h-.67a2.6,2.6,0,0,0-2.61,2.6,2.54,2.54,0,0,0,.05.49,8.24,8.24,0,0,0-5.42,7.74V205c-.36.74-1.17,1.34-2.86,1.34v2.86h8.41c0,.06,0,.11,0,.17a2.69,2.69,0,1,0,5.38,0c0-.06,0-.11,0-.17h8.4Z" style="fill: rgb(38, 50, 56); transform-origin: 426.805px 197.975px;" id="elk6d8ux1yaoa" class="animable"></path></g><g id="freepik--Locator--inject-61" class="animable" style="transform-origin: 417.875px 126.535px;"><path d="M417.87,109.33a13.8,13.8,0,0,0-13.8,13.81c0,7.62,13.8,20.6,13.8,20.6s13.81-13,13.81-20.6A13.81,13.81,0,0,0,417.87,109.33Zm0,18.66a4.86,4.86,0,1,1,4.86-4.85A4.85,4.85,0,0,1,417.87,128Z" style="fill: rgb(38, 50, 56); transform-origin: 417.875px 126.535px;" id="eldy0zvdo95ld" class="animable"></path></g><g id="freepik--Camera--inject-61" class="animable" style="transform-origin: 360.965px 67.215px;"><rect x="340.72" y="53.87" width="40.49" height="26.69" rx="3.34" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 360.965px 67.215px;" id="elxjpmjrfb89b" class="animable"></rect><g id="eluj4eonc3imr"><circle cx="360.96" cy="67.22" r="7.96" style="fill: rgb(38, 50, 56); transform-origin: 360.96px 67.22px; transform: rotate(-45deg);" class="animable"></circle></g><circle cx="374.37" cy="59.76" r="2.72" style="fill: rgb(38, 50, 56); transform-origin: 374.37px 59.76px;" id="elad6mzqnrsfg" class="animable"></circle></g><g id="freepik--speech-bubbles--inject-61" class="animable" style="transform-origin: 245.59px 68.965px;"><path d="M245.87,70.2a5,5,0,0,1,5-5h5.06V50.85a5.19,5.19,0,0,0-5.2-5.19H223.17a5.19,5.19,0,0,0-5.2,5.19v16a5.2,5.2,0,0,0,5.2,5.2h6.17l5.41,11.18,3-11.18h8.13Z" style="fill: rgb(38, 50, 56); transform-origin: 236.95px 64.445px;" id="elfgd28z1lhjg" class="animable"></path><path d="M250.87,66.66h18.8a3.55,3.55,0,0,1,3.54,3.54V81.1a3.54,3.54,0,0,1-3.54,3.54h-4.21l-3.69,7.63-2-7.63h-8.86a3.54,3.54,0,0,1-3.54-3.54V70.2A3.55,3.55,0,0,1,250.87,66.66Z" style="fill: rgb(38, 50, 56); transform-origin: 260.29px 79.465px;" id="elmxqm3ax2x1s" class="animable"></path><line x1="225.56" y1="52.93" x2="248.34" y2="52.93" style="fill: none; stroke: rgb(0, 123, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 236.95px 52.93px;" id="elbx1pvj9am4a" class="animable"></line><line x1="225.56" y1="58.52" x2="248.34" y2="58.52" style="fill: none; stroke: rgb(0, 123, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 236.95px 58.52px;" id="elei4gilf0bwc" class="animable"></line><line x1="225.56" y1="64.12" x2="248.34" y2="64.12" style="fill: none; stroke: rgb(0, 123, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 236.95px 64.12px;" id="el95681u8opd8" class="animable"></line></g><g id="freepik--Gears--inject-61" class="animable" style="transform-origin: 136.69px 67.995px;"><path d="M138.61,81.86l5.37.77,1.45-6.35-5.06-1.6a13.51,13.51,0,0,0-.94-4.47l3.82-3.6-4.07-5.1-4.28,2.88a13.2,13.2,0,0,0-4.22-2.08l-.42-5.11h-6.52l-.42,5.09a13.23,13.23,0,0,0-4.23,2.07l-4.29-2.88-4.06,5.1,3.8,3.58a13.52,13.52,0,0,0-1,4.47l-5.06,1.6L110,82.59l5.34-.77a13.72,13.72,0,0,0,2.78,3.42l-2,5.11L122,93.18l2.78-4.76a13.19,13.19,0,0,0,2.18.2,13.75,13.75,0,0,0,2.15-.19l2.79,4.77,5.88-2.83-2-5.1A13.46,13.46,0,0,0,138.61,81.86ZM120.82,75.2A6.16,6.16,0,1,1,127,81.35,6.16,6.16,0,0,1,120.82,75.2Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 126.955px 75.2px;" id="elvm3zriqnls" class="animable"></path><path d="M160.25,59.46l3.65.53,1-4.32-3.44-1.09a9.2,9.2,0,0,0-.64-3l2.59-2.45-2.76-3.46-2.91,2a8.94,8.94,0,0,0-2.87-1.41l-.28-3.47h-4.43l-.28,3.46a9.07,9.07,0,0,0-2.88,1.4l-2.91-2-2.76,3.46,2.58,2.43a9.07,9.07,0,0,0-.65,3l-3.44,1.09,1,4.32,3.63-.52a9.2,9.2,0,0,0,1.89,2.32L145,65.23l4,1.92,1.9-3.23a9,9,0,0,0,1.48.13,9.89,9.89,0,0,0,1.45-.12l1.9,3.24,4-1.93-1.33-3.46A9,9,0,0,0,160.25,59.46Zm-12.08-4.52a4.18,4.18,0,1,1,4.18,4.18A4.18,4.18,0,0,1,148.17,54.94Z" style="fill: rgb(38, 50, 56); transform-origin: 152.36px 54.98px;" id="elwp1jdgqzmk" class="animable"></path></g><g id="freepik--Envelope--inject-61" class="animable" style="transform-origin: 168.09px 119.515px;"><rect x="146.88" y="104.98" width="42.42" height="29.07" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 168.09px 119.515px;" id="elodanaoyf93f" class="animable"></rect><polygon points="146.88 104.98 168.09 119.52 189.3 104.98 146.88 104.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 168.09px 112.25px;" id="eloncvuxx09qo" class="animable"></polygon></g><g id="freepik--Clock--inject-61" class="animable" style="transform-origin: 85.76px 133.56px;"><circle cx="85.76" cy="133.56" r="20.35" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 85.76px 133.56px;" id="elypwxml1cvio" class="animable"></circle><polyline points="85.76 144.76 85.76 133.56 76.81 133.56" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 81.285px 139.16px;" id="elf54nvc1z5l5" class="animable"></polyline></g><g id="freepik--Calendar--inject-61" class="animable" style="transform-origin: 61.605px 197.1px;"><path d="M73.38,178.1v1.26a4.06,4.06,0,0,1-8.12,0V178.1H57.4v1.26a4.06,4.06,0,0,1-4.06,4.06h0a4.06,4.06,0,0,1-4.06-4.06V178.1H44v38H79.21v-38Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 61.605px 197.1px;" id="elssziuudmez" class="animable"></path><path d="M49.78,209.16v-2l5.46-8.51c.41-.63.78-1.23,1.13-1.77a9.34,9.34,0,0,0,.85-1.74,6.19,6.19,0,0,0,.33-2.11,4.78,4.78,0,0,0-.48-2.33,1.75,1.75,0,0,0-1.67-.84,2.11,2.11,0,0,0-1.56.55,3,3,0,0,0-.77,1.46,8.46,8.46,0,0,0-.21,1.93v.72H50v-.74a9.47,9.47,0,0,1,.52-3.33,4.27,4.27,0,0,1,1.67-2.16,5.46,5.46,0,0,1,3.06-.77A4.85,4.85,0,0,1,59.14,189a6.06,6.06,0,0,1,1.27,4.07,7.93,7.93,0,0,1-.33,2.41,9.69,9.69,0,0,1-.86,1.94c-.36.6-.75,1.22-1.17,1.85l-4.93,7.53h6.79v2.38Z" style="fill: rgb(38, 50, 56); transform-origin: 55.0999px 198.342px;" id="elhx1715o5jwh" class="animable"></path><path d="M67.8,209.37a5.51,5.51,0,0,1-3.07-.74,4,4,0,0,1-1.63-2.14,10.09,10.09,0,0,1-.49-3.34h2.83A11.39,11.39,0,0,0,65.6,205a3.08,3.08,0,0,0,.68,1.52,2,2,0,0,0,1.57.59,1.94,1.94,0,0,0,1.67-.67,3.74,3.74,0,0,0,.64-1.83,22.75,22.75,0,0,0,.13-2.61,15.94,15.94,0,0,0-.16-2.48,2.81,2.81,0,0,0-.66-1.56,2,2,0,0,0-1.59-.55,2.11,2.11,0,0,0-1.48.55,3.32,3.32,0,0,0-.9,1.23H63.09V187.7h9.24v2.83H65.66l-.19,5.94a3.67,3.67,0,0,1,1.31-.87,4.57,4.57,0,0,1,1.79-.32,4.15,4.15,0,0,1,2.74.82,4.49,4.49,0,0,1,1.41,2.25,12.08,12.08,0,0,1,.41,3.29,18.44,18.44,0,0,1-.24,3.06,7.44,7.44,0,0,1-.84,2.46,4.19,4.19,0,0,1-1.63,1.63A5.24,5.24,0,0,1,67.8,209.37Z" style="fill: rgb(38, 50, 56); transform-origin: 67.8693px 198.539px;" id="elkvrux4n7q5" class="animable"></path></g><g id="freepik--Padlock--inject-61" class="animable" style="transform-origin: 58.025px 269.266px;"><path d="M72,265.74v-8.39a14,14,0,0,0-27.9,0v8.39h-.85V294H72.8V265.74Zm-24.23-8.39a10.28,10.28,0,0,1,20.56,0v8.39H47.73Z" style="fill: rgb(38, 50, 56); transform-origin: 58.025px 269.266px;" id="elr0x7s62izcl" class="animable"></path><path d="M62,277.24a3.89,3.89,0,1,0-6.15,3.15v6.43h4.53v-6.43A3.86,3.86,0,0,0,62,277.24Z" style="fill: rgb(255, 255, 255); transform-origin: 58.11px 280.077px;" id="eloxpdkv9ydc" class="animable"></path></g><g id="freepik--Character--inject-61" class="animable" style="transform-origin: 209.738px 269.047px;"><path d="M311.46,430c-.59-1.76-27.48-15.41-37.66-20.53h29.06a4.5,4.5,0,1,0,5.31,1.91,2.39,2.39,0,0,0,2.32-.46c1-.72,1.21-4.34-1.44-6-2.31-1.47-38.26-2.21-47.71-2.38V371.29h7.39V338.45H243.14v32.84h7.39v31.24c-12.35.24-42.7,1-44.82,2.32-2.65,1.69-2.41,5.31-1.44,6a2.6,2.6,0,0,0,1.77.59,4.41,4.41,0,0,0-.6,2.19,4.5,4.5,0,1,0,6-4.23H241c-10.19,5.12-37.07,18.77-37.66,20.53a8,8,0,0,0,.21,4.58,6.26,6.26,0,0,0-.21,1.57,6.16,6.16,0,1,0,9.35-5.25c10.61-4.63,43.1-16.15,44.73-16.36,1.6.2,33.05,11.35,44.18,16.12a6.16,6.16,0,1,0,8.93,5.57A8.38,8.38,0,0,0,311.46,430ZM306,409.47l-.13,0h.09Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 257.392px 390.355px;" id="el2ef4ebswvue" class="animable"></path><path d="M216.44,240.69a21.07,21.07,0,0,1-9.15,5.23c-13.52,3.42-23.09-4.79-29.63,12.64s5.67,52.28,20.92,63.61,39.65,19.17,71,6.54,60.56-47.06,63.61-81.92-80.35-30.25-89-26.23S216.44,240.69,216.44,240.69Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 254.563px 276.506px;" id="elqstoj9x97to" class="animable"></path><path d="M250.47,181.64s-4.82,2.54-6.09,6.09S227.62,219,227.62,219s-1.52-26.15-3.81-41.13S219,145.58,215.43,138s-12.19-13.71-15.74-15-3.81,1-1,2.79,7.11,7.87,7.11,7.87l2.29,4.57s-7.62,9.39-7.62,14.22,9.9,10.41,9.9,10.41-8.38,56.62-6.09,67,8.12,20.82,12.19,21.84,24.12-13.21,24.12-13.21S253,199.67,254,192.3,254.79,180.11,250.47,181.64Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 225.638px 187.188px;" id="el0vldppris48" class="animable"></path><path d="M250.47,181.64s-4.82,2.54-6.09,6.09S227.62,219,227.62,219s-.31-5.37-.87-12.63c-8.32,5.84-17,4-22,2.14-.87,9.68-1.26,18-.51,21.41,2.28,10.41,8.12,20.82,12.19,21.84s24.12-13.21,24.12-13.21S253,199.67,254,192.3,254.79,180.11,250.47,181.64Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 229.169px 216.584px;" id="elvde5jp2d4nn" class="animable"></path><path d="M227.62,219s.51,7.62.76,12.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 228px 225.475px;" id="elw2juos6y88" class="animable"></path><path d="M198.69,141.87s-4.19,3.5-3.85,5.89,7.52,9.22,9.74,8.54,3.24-.86,1-3.84-5.29-6.66-5.8-8S198.69,141.87,198.69,141.87Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 200.828px 149.109px;" id="el033vl7i6ob0f" class="animable"></path><path d="M208.07,138.22s-6.82.32-8.19,1.6-1.62,4.36,1.2,8.2,4.78,6.31,5.89,5.12.85-2.82-.17-4.53a48.49,48.49,0,0,1-2.31-4.69l3.5-4.1Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 203.479px 145.83px;" id="el72yh1od6157" class="animable"></path><path d="M194.84,147.76s-2.56,4.27-.76,6.75,7.59,5.8,9.56,4.86.94-3.07.94-3.07a26.71,26.71,0,0,1-4.87-3.08A34.53,34.53,0,0,1,194.84,147.76Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 199.144px 153.647px;" id="el9qyfp2rmm69" class="animable"></path><path d="M217.21,143s-5.89-5.44-9.14-4.82c-1.46.28-6.86,4.82-7.87,6.86s.5,2.79,2,2.28,7.87-2.79,7.87-2.79-2,8.38,0,10.66,8.38,2.29,8.38,2.29" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 209.161px 147.805px;" id="elfdo851h9sxm" class="animable"></path><path d="M285.51,177.83s-32.5,1.78-35,3.81-4.32,7.62-4.57,9.14-9.65,46.72-11.43,54.59-18.26,27.43-18.26,27.43,29.64,16.1,43.68,23.27a101,101,0,0,0,29.15,9.4l33-69.75s15.74-38.85,16.25-42.66-.51-2.28-10.66-7.11a80.23,80.23,0,0,0-20.57-6.6C304.55,178.85,285.51,177.83,285.51,177.83Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 277.342px 241.65px;" id="elm1m06o851v" class="animable"></path><path d="M107.3,339.16l-20.74-.65S61,325.23,58.7,326.2s2.92,16.53,9.72,25.27S94,372.21,97.58,374.15s5.51,3.24,8.74,1,11-17.49,11-17.49Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 87.7345px 351.239px;" id="el1dxpl5adngo" class="animable"></path><path d="M73,348.56c-6.25-7.58-10.49-17-12.54-22.14a3.45,3.45,0,0,0-1.72-.22c-2.27,1,2.92,16.53,9.72,25.27S94,372.21,97.58,374.15s5.51,3.24,8.74,1a12,12,0,0,0,2.31-2.58C101.34,368.8,80.4,357.59,73,348.56Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 83.4146px 351.251px;" id="el89wjzqb12yq" class="animable"></path><path d="M174,409.14s-7.45,13.93-11,19.11-16.85,12-16.52,14.91S163,447,171.77,446.4s16.52-11.34,21-13.93,7.78-3.57,5.19-9.72-5.83-12.31-5.83-12.31Z" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 172.673px 427.857px;" id="el2mzqohdimm8" class="animable"></path><path d="M172.74,442.51c-6.34,2-18.21-.2-24.79-1.73-1,.94-1.52,1.75-1.45,2.38.32,2.91,16.52,3.88,25.27,3.24s16.52-11.34,21-13.93,7.78-3.57,5.19-9.72C181.49,428.58,181.81,439.59,172.74,442.51Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 172.683px 434.669px;" id="elhd4df84p67e" class="animable"></path><path d="M148.44,307.09l24.62,90.06-3.56,2.92,3.89,13a61.12,61.12,0,0,0,10.36,2.91c7.45,1.62,11.67.65,11.67.65s.32-9.07-.65-12-2.59-8.1-2.59-8.1l-4.54-78.72s41.14,15.55,57.34,14.58-11.66-32.4-30.13-47.62-59-23.65-65.44-7.46A42.92,42.92,0,0,0,148.44,307.09Z" style="fill: rgb(133, 133, 133); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 198.044px 342.729px;" id="elmkq04wvtr5n" class="animable"></path><path d="M214.85,284.74a63,63,0,0,0-12.8-7.95l-21.59-7.08c-6.72-1.27-13.19-1.59-18.53-.68l14,13.76,11.66,35s41.14,15.55,57.34,14.58S233.32,300,214.85,284.74Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 205.869px 300.462px;" id="eljz46f3qr1kq" class="animable"></path><path d="M290.34,301.91s-5.18,12.95-12.64,22-28.51,11.66-37.25,8.42-32.72-23-46.33-34.67S176,282.79,176,282.79l-47,65.44s-2.59,2.6-2.27,5.19-13,10.69-13,10.69-6.16-5.19-8.1-9.07-3.89-7.13-3.24-9.72-.65-4.54.65-8.1,6.8-5.18,6.8-5.18,41.14-75.81,46-83.26,7.78-9.4,11.34-8.75,51.19,24.62,59,29.16S290.34,301.91,290.34,301.91Z" style="fill: rgb(133, 133, 133); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 196.301px 302.012px;" id="elxloxzqoszn" class="animable"></path><path d="M237.61,312.72a80.2,80.2,0,0,0,6.64,4.58" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 240.93px 315.01px;" id="elx68o5x50sha" class="animable"></path><path d="M185.34,272.86c13,9.79,35.42,27.29,48.71,37.22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 209.695px 291.47px;" id="el1v4cx3f57dg" class="animable"></path><path d="M165.78,282.19s1.3-11.28,3-10.84,5.64,5.63,5.64,3-.87-8.67.87-8.67c.35,0,3.13,2,7.39,5.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 174.23px 273.935px;" id="eltrl40cnj2mo" class="animable"></path><path d="M284,167.93s-4.83,21.07-6.86,26.4-7.62,13.46-3.55,14.48,34-24.63,36.05-29.2,5-14.36,5-14.36S294.65,172.5,284,167.93Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 293.391px 187.045px;" id="el2hubhizj5ww" class="animable"></path><path d="M285.61,105.89s-8,2.31-4.61,6.74,9.22,4.07,9.22,4.07-4.08-3.72,7.09-3.72,17.71,1.77,17.54,7.8-2.66,9,.17,13.11,6.56,14.53,6.56,14.53l8.68,2s9-10.28,10.81-22.15,3.37-18.07-15.24-28.17-42-11-43.94-4.26A8.88,8.88,0,0,0,285.61,105.89Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 311.129px 120.963px;" id="elqfcyiwmohug" class="animable"></path><path d="M293.05,106.07s-7.26,5.85-7.44,8.51-8.5,27.1-9.57,34,.89,19,4.26,22.86,11,4.78,19.84,2.48,13.47-5.85,14.53-8.68,8.5-20,8.5-20-5.13-12-6.55-15.42,3.36-9,3.54-10.45-8.5-7.26-11-8.68-5.85-.18-8.33-.89A55.58,55.58,0,0,1,293.05,106.07Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 299.458px 140.618px;" id="elvn4r5s1ou1" class="animable"></path><path d="M314.67,165.25c1.06-2.84,8.5-20,8.5-20s-1.53-3.61-3.16-7.42c-2.24,5.32-9.27,22-9.42,22.48s-.7-2.31-9.39-6.2-10.1-6.2-15.94-4.61a46.6,46.6,0,0,0-9.39,3.54l-.11.35c.08,6.73,1.86,15,4.54,18.08,3.36,3.9,11,4.78,19.84,2.48S313.61,168.08,314.67,165.25Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 299.465px 156.518px;" id="elmn04pja7ic" class="animable"></path><path d="M321.58,148.42s3.72-3.72,7.8-2.13.53,7.44-1.78,9.75S317.33,158,317.33,158Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 324.288px 151.957px;" id="elemksy2vctb6" class="animable"></path><path d="M284.73,123.08s2.3-4.07,8,0" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 288.73px 122.176px;" id="elvsekfx9ozir" class="animable"></path><path d="M300.49,124.5s5-3,9.75,3.19" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 305.365px 125.732px;" id="eldr8zwl2sl" class="animable"></path><path d="M293.41,124.5a25.51,25.51,0,0,1,.88,5.14c0,2-8.86,20-8,20.55s7.09-3.37,7.62-3.37" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 290.261px 137.371px;" id="eldif8zwbdj1l" class="animable"></path><path d="M304.68,131.84c-.4,1.25-1.32,2.08-2.07,1.85s-1-1.45-.63-2.71,1.32-2.09,2.07-1.85S305.08,130.58,304.68,131.84Z" style="fill: rgb(38, 50, 56); transform-origin: 303.337px 131.408px;" id="el1yvr80njdojj" class="animable"></path><path d="M288.74,128.29c-.4,1.26-1.33,2.09-2.08,1.85s-1-1.44-.63-2.7,1.33-2.09,2.07-1.86S289.13,127,288.74,128.29Z" style="fill: rgb(38, 50, 56); transform-origin: 287.387px 127.862px;" id="ela0d86w7d8eb" class="animable"></path><path d="M300.85,135.31s-.18,2.48,4.61,3.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 303.155px 137.255px;" id="el0ik1s7awe5qg" class="animable"></path><path d="M290.75,131.05a19.76,19.76,0,0,1-6.2,2.13" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 287.65px 132.115px;" id="elwisap62b3cp" class="animable"></path><path d="M283.66,153.2s5.5,4.25,14.18,1.77" style="fill: none; stroke: rgb(255, 255, 255); stroke-linejoin: round; transform-origin: 290.75px 154.473px;" id="elh3a2w883zf5" class="animable"></path><path d="M324.36,265.62s-30.78,2.59-39.53,17.17S267,321.67,257.62,329.44s-44.71-1.62-50.54-4.53a105.13,105.13,0,0,0-13-5.19s6.8,10.7,28.51,17.82,54.43,10.37,88.77-2.91,44.06-38.56,48.27-57.67,0-45-6.16-61.23-15.87-26.24-19.11-25.92-2.92,37.26-1,51.19S324.36,265.62,324.36,265.62Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 277.704px 266.769px;" id="elnssr913tw6" class="animable"></path><path d="M263.3,231.72a25.24,25.24,0,0,0,4.43,4.05c2.5,1.73,3.46,8.08,4.23,9s1.73,4.81,1.73,4.81-6.74-4.81-8.47-6.74S263.3,231.72,263.3,231.72Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 268.495px 240.65px;" id="elgpcyr6ucard" class="animable"></path><path d="M245.11,223.71l9.38,33.77a2.06,2.06,0,0,0,1.55,1.46l12.87,2.71a2,2,0,0,0,2.41-2.52l-8.85-34a2,2,0,0,0-1.61-1.5l-13.41-2.45A2,2,0,0,0,245.11,223.71Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 258.216px 241.424px;" id="elsm6m9jgzjyp" class="animable"></path><path d="M327.66,186s8.42,3,10.15,4.57,3.08,7.32,6.16,17.33,7.89,51.6,8.09,54.49-12.33,6-22.34,7.7-47.55-1.73-47.55-1.73-7.71-1.16-13.29-1.74-13.86-4.62-15.6-5-.57-3.08-.57-3.08a9.87,9.87,0,0,1-2.89.57c-1.35,0-1.35-1.73-1.35-1.73s1.54-3.66,2.31-4,12.13-.58,12.13-.58l-10-4.43s-5.2,1-6.35.58-.77-2.31,0-2.89,6.73-1.92,7.89-1.54,9.05,2.31,9.05,2.31l-1.16-2.31-9.24-5s-3.66-.2-4.81-.2-3.47-.77-2.89-2.69,6.55-1.74,8.47-1.35,13.48,4.43,15.41,6.55,8.08,14.63,8.08,14.63,11.55,2.31,26-2.31,19.84-6.36,19.84-6.36l-6-29.45" style="fill: rgb(0, 123, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 298.685px 228.281px;" id="eldy4z5w01k3" class="animable"></path><path d="M277.35,256.37s-6.16-12.52-8.08-14.63-13.48-6.16-15.41-6.55-7.89-.58-8.47,1.35,1.73,2.69,2.89,2.69,4.81.2,4.81.2l9.24,5,1.16,2.31s-7.89-1.92-9.05-2.31-7.12,1-7.89,1.54-1.16,2.51,0,2.89,6.35-.58,6.35-.58l10,4.43s-11.36.19-12.13.58-2.31,4-2.31,4,0,1.73,1.35,1.73a9.87,9.87,0,0,0,2.89-.57s-1.16,2.69.57,3.08,10,4.43,15.6,5,13.29,1.74,13.29,1.74,14.86,1.37,28.38,1.95c1.87-8.93.91-14.75-.54-18.34l-6.67,2.14C288.9,258.68,277.35,256.37,277.35,256.37Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 278.437px 252.578px;" id="elbyuz75tihge" class="animable"></path><path d="M252.71,258.49a33.65,33.65,0,0,1,3.85-1.16c1.15-.19,8.66,1.73,8.66,1.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 258.965px 258.188px;" id="el476umt0whfd" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
				</div>
				<div class="toast-container position-fixed top-0 end-0 p-3">
					<div id="myToast" class="toast align-items-center text-bg-info border-0" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="d-flex">
							<div class="toast-body">
								...
							</div>
							<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
					</div>
				</div>
			</div>

		</section>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="public/script/script.js"></script>
</body>
</html>