<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include "components/heads.php"; ?>
</head>

<body>
	<section class="bg-color1">
		<?php include "components/navbar.php" ?>
		<div class="grid max-w-screen-xl px-4 pb-40 lg:pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-6 lg:grid-cols-12 lg:pt-5">
			<div class="mr-auto place-self-center lg:col-span-5">
				<h1 class="text-white max-w-2xl mb-4 text-4xl font-bold leading-none tracking-tight md:text-5xl xl:text-6xl">
					Tudo o que você precisa para sua pintura perfeita.
				</h1>
				<p class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl">
					A pintow é uma solução inteligente para você planejar
					sua reforma com melhores preços, garantia, segurança e no conforto da sua casa.
				</p>
				<div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
					<a href="cadastre-se" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium text-white bg-blue-600 rounded-3xl sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
						Cadastre Agora
					</a>
				</div>
			</div>
			<div class="lg:mt-0 lg:col-span-7 lg:order-last order-first">
				<img src="<?php echo $URI->base("/assets/img/toque_suave_de_lado2.png"); ?>" alt="hero image" class="img-hero">
			</div>
		</div>
	</section>
	<section>
		<div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
			<!-- Row -->
			<div class="items-center gap-8 grid lg:grid-cols-12 xl:gap-16">
				<div class="text-gray-500 sm:text-lg lg:col-span-5">
					<h2 class="text-color3 max-w-2xl pt-36 lg:pt-0 mb-4 text-3xl font-bold leading-none tracking-tight md:text-5xl xl:text-6xl">
						Somos a única Construtech que oferece parceria
						com o lojista.</h2>
					<p class="max-w-2xl mb-6 text-gray-900 font-light lg:mb-8 md:text-lg lg:text-xl text-justify">
						Estamos trabalhando para tornar a gestão de venda de produtos
						tão fácil, que as empresas não precisam pensar duas vezes.
						Seja em conjunto com nossos produtos, ou para aqueles que
						desejam otimizar suas vendas com nossa base de clientes,
						sempre com a formatação de compra planejada.
					</p>
					<div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4 lg:mb-0 lg:flex lg:col-span-7">
						<a href="https://api.whatsapp.com/send?phone=5586988070748&text=Gostaria%20de%20saber mais%20sobre%20a%20Pintow" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium text-white bg-blue-600 rounded-3xl sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
							Solicite uma apresentação
						</a>
					</div>
				</div>
				<div class="lg:order-last order-first lg:col-span-7">
					<img class="w-full img-section-2" src="<?php echo $URI->base("/assets/img/pintowimg1.png"); ?>" alt="Pintow">
				</div>
			</div>
		</div>
		<div class="bg-color2">
			<div class=" max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
				<div class="gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
					<div>
						<img class="w-full" src="<?php echo $URI->base("/assets/img/cores.gif"); ?>" alt="Pintow">
					</div>
					<div class="text-gray-500 sm:text-lg">
						<h2 class="pt-4 text-color3 max-w-2xl mb-4 text-3xl font-bold leading-none tracking-tight md:text-5xl xl:text-6xl">
							A Pintow é uma comunidade para todos aqueles
							que amam as cores!</h2>
						<ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Reduza o tempo na hora da escolha das cores e material</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Elimine a necessidade de estocar produtos na obra</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Tenha o melhor custo benefício</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Tenha uma experiência tranquila e rápida;</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Qualidade, confiança e garantia de fabrica para sua pintura.</span>
							</li>
						</ul>
						<div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
							<a href="cadastre-se" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium text-white bg-blue-600 rounded-3xl sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
								Cadastre agora
							</a>
						</div>
					</div>
				</div>
				<div class="items-center gap-8 grid lg:grid-cols-12 xl:gap-16">
					<div class="text-gray-500 sm:text-lg lg:col-span-6">
						<h2 class="text-color3 max-w-2xl pt-6 lg:pt-0 mb-4 text-3xl font-bold leading-none tracking-tight md:text-5xl xl:text-6xl">Planeje, administre e consiga mais clientes, através do nosso match de obras.</h2>
						<ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Planejamento é a palavra chave aqui na pintow, você vai conseguir administrar suas obras e conseguir mais clientes</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Planejamento é a palavra chave aqui na pintow, você vai conseguir administrar suas obras e conseguir mais clientes</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Cuide do valor total da obra e economize com nossos parceiros</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Ganhe pontos para trocar em produtos</span>
							</li>
							<li class="flex space-x-3">
								<!-- Icon -->
								<svg class="flex-shrink-0 w-5 h-5 text-color3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-base font-medium leading-tight text-color3">Conheça profissionais que podem te ajudar.</span>
							</li>
						</ul>
						<div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
							<a href="cadastre-se" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium text-white bg-blue-600 rounded-3xl sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
								Comece agora gratuitamente
							</a>
						</div>
					</div>
					<div class="lg:order-last order-first lg:col-span-6">
						<img class="w-full" src="<?php echo $URI->base("/assets/img/img3.png"); ?>" alt="Pintow">
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section>
		<div class="max-w-screen-xl px-4 py-12 mx-auto lg:px-6">
			<div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
				<h2 class="mb-4 text-3xl font-extrabold tracking-tight text-color3">Os motivos para escolher a Pintow</h2>
				<p class="mb-5 font-light text-gray-500 sm:text-xl">Nosso serviço totalmente automatizado, rápido, seguro e garantia direto de fabrica do setor proporcionam tranquilidade para qualquer cliente. Com a infraestrutura interna da Pintow, a qualidade da entrega sempre vem em primeiro lugar para nossos clientes.</p>
				<div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4 justify-center">
					<a href="https://api.whatsapp.com/send?phone=5586988070748&text=Gostaria%20de%20saber mais%20sobre%20a%20Pintow" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium border border-blue-700 rounded-3xl sm:w-auto focus:outline-none text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
						Entre em contato Pelo Whats
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-16 xl:gap-24 lg:px-6">
			<div class="space-y-8 md:grid md:grid-cols-3 md:gap-12 md:space-y-0  text-center">
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">2min</h3>
					<p class="font-light text-gray-500">Primeiro tempo de resposta com suporte 24/7</p>
				</div>
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">200+</h3>
					<p class="font-light text-gray-500">Mais de 200 pesquisas feitas com profissionais da área para desenvolver nossa solução. </p>
				</div>
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">1000+</h3>
					<p class="font-light text-gray-500">Cores para você ter muita opção de cor e de produto também.</p>
				</div>
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">2hrs</h3>
					<p class="font-light text-gray-500">Economizados por cliente na compra fácil e rápida.</p>
				</div>
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">350+</h3>
					<p class="font-light text-gray-500">350 colaboradores desenvolvendo o produto que vai chegar na sua obra.</p>
				</div>
				<div class="px-8">
					<h3 class="mb-2 text-4xl text-color3 font-bold text-center">15%+</h3>
					<p class="font-light text-gray-500">Economizados para aqueles que planejam sua compra.</p>
				</div>
			</div>
			<a href="cadastre-se">
				<div class="flex justify-center pt-20 pb-8">
					<img class="w-full hidden lg:block" src="./assets/img/descubra-desk.png" alt="">
					<img class="w-full lg:hidden" src="./assets/img/descubra-mob.png" alt="">
				</div>
			</a>
		</div>
	</section>
	<section class="bg-color4">
		<div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
			<div class="max-w-screen-sm mx-auto text-center">
				<h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight text-white">Comece agora com a Pintow</h2>
				<p class="mb-6 font-light text-white md:text-lg">E participe do ranking de compras da empresa, são muitas vantagens e prêmios para você.</p>
				<a href="https://api.whatsapp.com/send?phone=5586988070748&text=Orçamento%20de%20Tintas" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium border border-white rounded-3xl sm:w-auto focus:outline-none text-white focus:z-10 focus:ring-4 focus:ring-gray-200">
					Solicite um orçamento
				</a>
				<a href="cadastre-se" class="inline-flex items-center justify-center w-full px-5 py-4 mb-2 text-sm font-medium rounded-3xl sm:w-auto focus:outline-none text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Crie uma conta</a>
			</div>
		</div>
	</section>
	<footer class="bg-color1">
		<div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
			<div class="text-center">
				<a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-white">
					<img src="./assets/img/logo.png" class="h-6 mr-3 sm:h-9" alt="Pintow Logo" />
				</a>
				<span class="block text-sm text-center text-white">© Copyright 2023. All Rights Reserved.
				</span>
			</div>
		</div>
	</footer>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>