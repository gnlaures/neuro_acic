<header class="l-headerHome">
	<img src="media/img/content/header.jpg" alt="ACIC" class="l-headerHome__cover">
	<div class="u-container u-containerFlex u-aic">
		<div class="l-headerHome__slide">
			<div class="swiper__headerHome swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="headerSwiperContent">
							<h1>Lorem ipsum dolor sit consec adetetur adipiscing eliam ut est id nibh sagittis tincidunt et vitae placerat rhnocs.</h1>
							<p>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</p>
							<a href="#" class="c-btn --secondary">Anunciar vaga gratuitamente</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="headerSwiperContent">
							<h1>Lorem ipsum dos.</h1>
							<p>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</p>
							<a href="#" class="c-btn --secondary">Cadastre seu currículo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-headerHome__search">
			<div class="c-mainSearch">
				<div class="c-tabHorizontal">
					<div class="c-tabHorizontal__header">
						<ul>
							<li><a href="#buscar-vagas" class="is-active">Buscar vagas</a></li>
							<li><a href="#buscar-candidatos">Buscar candidatos</a></li>
						</ul>
					</div>
					<div class="c-tabHorizontal__content is-active" id="buscar-vagas">
						<form action="@" class="c-simpleForm">
							<ul>
								<li class="u-fw100">
									<label for="formHomeSearchJob_area" class="u-dflex">
										<strong>Área de atuação</strong>
										<span class="observation">Selecione no máximo 4 áreas</span>
									</label>
									<select class="js-select2" name="areas[]" multiple="multiple" id="formHomeSearchJob_area">
										<option value="A1">Área 1</option>
										<option value="A2">Área 2</option>
										<option value="A3">Área 3</option>
										<option value="A4">Área 4</option>
									</select>
								</li>
								<li class="u-fw100">
									<label for="formHomeSearchJob_cidade" class="u-dflex">
										<strong>Cidade</strong>
										<span class="observation">Selecione quantas cidades desejar</span>
									</label>
									<select class="js-select2" name="cidades[]" multiple="multiple" id="formHomeSearchJob_cidade">
										<option value="C1">Cidade 1</option>
										<option value="C2">Cidade 2</option>
										<option value="C3">Cidade 3</option>
										<option value="C4">Cidade 4</option>
									</select>
								</li>
								<li class="u-fw100 liBtn">
									<button class="c-btn --primary">Buscar vagas</button>
								</li>
							</ul>
						</form>
					</div>
					<div class="c-tabHorizontal__content u-dnone" id="buscar-candidatos">
						<div class="c-contentBlocked">
							<?php include('media/img/icons/icon_locked.svg'); ?>
							<p>Somente empresas logadas tem acesso a busca de candidatos.</p>
							<p>Quer encontrar o candidato ideal para sua empresa?</p>
							<a href="cadastro" class="c-btn --primary">Cadastre-a!</a>
						</div>
						<form action="#" class="c-simpleForm">
							<ul class="u-dnone">
								<li class="u-fw100">
									<label for="formHomeSearchPerson_area" class="u-dflex">
										<strong>Área de atuação</strong>
										<span class="observation">Selecione no máximo 4 áreas</span>
									</label>
									<select class="js-select2" name="areas_person[]" multiple="multiple" id="formHomeSearchPerson_area">
										<option value="A1">Área 1</option>
										<option value="A2">Área 2</option>
										<option value="A3">Área 3</option>
										<option value="A4">Área 4</option>
									</select>
								</li>
								<li class="u-fw100">
									<label for="formHomeSearchPerson_cidade" class="u-dflex">
										<strong>Cidade</strong>
										<span class="observation">Selecione quantas cidades desejar</span>
									</label>
									<select class="js-select2" name="cidades_person[]" multiple="multiple" id="formHomeSearchPerson_cidade">
										<option value="C1">Cidade 1</option>
										<option value="C2">Cidade 2</option>
										<option value="C3">Cidade 3</option>
										<option value="C4">Cidade 4</option>
									</select>
								</li>
								<li class="u-fw100 liBtn">
									<button class="c-btn --primary">Buscar candidatos</button>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main id="page__home">
	<section class="s-associationNumbers">
		<div class="u-container">
			<h1>Lorem ipsum dolor sit consec adetetur adipis cing elet vitae placerat rhnocs. </h1>
			<h2>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</h2>
			<div class="swiper__numbersOfAssociation swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<?php
							$modifierClass = '';
							$mainNumber = '451';
							$descriptionCard = 'Vagas preenchidas pelo Banco de Talentos nos últimos 90 dias';
							include('components/c-cardNumbersOfAssociation.php');
							?>
					</div>
					<div class="swiper-slide">
						<?php
							$modifierClass = '';
							$mainNumber = '212';
							$descriptionCard = 'Empresas anunciantes no Banco de Talentos nos últimos 90 dias';
							include('components/c-cardNumbersOfAssociation.php');
							?>
					</div>
					<div class="swiper-slide">
						<?php
							$modifierClass = '';
							$mainNumber = '2986';
							$descriptionCard = 'Candidatos ativos no Banco de Talentos nos últimos 90 dias';
							include('components/c-cardNumbersOfAssociation.php');
							?>
					</div>
					<div class="swiper-slide">
						<?php
							$modifierClass = '';
							$mainNumber = '451';
							$descriptionCard = 'Vagas anunciadas pelo Banco de talentos em 2020';
							include('components/c-cardNumbersOfAssociation.php');
							?>
					</div>
					<div class="swiper-slide">
						<?php
							$modifierClass = '';
							$mainNumber = '1456';
							$descriptionCard = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit';
							include('components/c-cardNumbersOfAssociation.php');
							?>
					</div>
				</div>
			</div>
			<span class="u-smallObservation">* Dados atualizados em tempo real</span>
		</div>
	</section>
	<section class="s-testemonials">
		<div class="u-container">
			<div class="s-testemonials__primary">
				<div class="primary__l">
					<div class="c-videoLink">
						<a href="#" title="Lorem Ipsum sit - Título do vídeo" class="c-videoLink__cover u-aspectRatio u-aspectRatio--16-9">
							<img src="media/img/content/videoCover.jpg" alt="Lorem Ipsum sit - Título do vídeo">
						</a>
						<a href="#" title="Lorem Ipsum sit - Título do vídeo" class="c-videoLink__icon">
							<?php include('media/img/icons/icon_play.svg'); ?>
						</a>
					</div>
				</div>
				<div class="primary__r">
					<div class="c-adsFeature">
						<a href="#">
							<picture>
								<source media="(min-width:900px)" srcset="media/img/content/publiAd/cursos_1.png">
								<img src="media/img/content/publiAd/cursos_1__mobile.png" alt="Cursos ACIC">
							</picture>
						</a>
					</div>
				</div>
			</div>
			<div class="s-testemonials__list">
				<ul class="c-responsiveGrid"
						data-maxw-breaks="780, 400"
						data-maxw-cols="2, 1"
						data-cols-init="3">
					<li>
						<?php
							$name = 'Caroline Gomes';
							$job = 'Aux. Administrativa';
							$quote = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec dapibus elit, condimentum eleifend nisl.';
							$stars = '5';
							$picture = '2.jpg';
							include('components/c-testemonialCard.php');
						?>
					</li>
					<li>
						<?php
							$name = 'Kenneth Lopez';
							$job = 'Des. Gráfico';
							$quote = 'Lorem ipsum dolor sit amet, consectetur adipiscing elbus elit, condimentum eleifend nisl.';
							$stars = '4';
							$picture = '3.jpg';
							include('components/c-testemonialCard.php');
						?>
					</li>
					<li>
						<?php
							$name = 'Josh Nicholz';
							$job = 'Contador';
							$quote = 'Lorem ipsum dolor sit amet, consectetur adipiondi mentum eleifend ning elit. Nullam nec dapibus elit huhuha aheuh asdasdl.';
							$stars = '3';
							$picture = '4.jpg';
							include('components/c-testemonialCard.php');
						?>
					</li>
					<li>
						<?php
							$name = 'Ulrich Jarl';
							$job = 'Arquiteto';
							$quote = 'Fus Lorem roh ipsum daah dolor sit amet, consectetur adipiondi mentum eleifend ning elit.';
							$stars = '5';
							$picture = '5.jpg';
							include('components/c-testemonialCard.php');
						?>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="l-homeCentralContent">
		<div class="u-container u-containerFlex">
			<div class="l-homeCentralContent__l">
				<section class="s-recentBlogPosts">
					<h1>Conteúdos recentes</h1>
					<ul>
						<li>
							<?php
								$modifierClass = '';
								$postLink = '#';
								$postTitle = 'Como fazer um currículo sem experiência e sem ensino superior';
								$postResume = 'Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.';
								$postThumb = 'post1.jpg';
								include('components/c-blog_recentPost.php');
							?>
						</li>
						<li>
							<?php
								$modifierClass = '';
								$postLink = '#';
								$postTitle = 'Como fazer um currículo sem experiência e sem ensino superior';
								$postResume = 'Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.';
								$postThumb = 'post1.jpg';
								include('components/c-blog_recentPost.php');
							?>
						</li>
						<li>
							<?php
								$modifierClass = '--noThumb';
								$postLink = '#';
								$postTitle = 'Como fazer um currículo sem experiência e sem ensino superior';
								$postResume = 'Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.';
								$postThumb = 'post1.jpg';
								include('components/c-blog_recentPost.php');
							?>
						</li>
						<li>
							<?php
								$modifierClass = '--noThumb';
								$postLink = '#';
								$postTitle = 'Como fazer um currículo sem experiência e sem ensino superior';
								$postResume = 'Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.';
								$postThumb = 'post1.jpg';
								include('components/c-blog_recentPost.php');
							?>
						</li>
					</ul>
				</section>
			</div>
			<div class="l-homeCentralContent__r">
				<section class="s-recentJobs">
					<h1>Vagas recentes</h1>
					<ul>
						<li>
							<?php
								$title = 'Gerente de Projetos';
								$budget = 'R$ 4.500,00 - R$ 6.000,00';
								$cities = [
									['Siderópolis', 3],
									['Tubarão', 5],
								];
								$benefits = ['Plano de Saúde', 'VT', 'VR'];
								$linkJob = '#';
								$modifierClass = '';
								include('components/c-job_recent.php');
							?>
						</li>
						<li>
							<?php
								$title = 'Aux. Adminsitrativo';
								$budget = 'R$ 2.500,00 - R$ 3.000,00';
								$cities = [
									['Criciúma', 2],
									['Laguna', 9],
								];
								$benefits = ['VT', 'VR'];
								$linkJob = '#';
								$modifierClass = '';
								include('components/c-job_recent.php');
							?>
						</li>
						<li>
							<?php
								$title = 'Designer gráfico';
								$budget = 'R$ 4.500,00 - R$ 6.000,00';
								$cities = [
									['Siderópolis', 3],
									['Morro da Fumaça', 1],
								];
								$benefits = ['Plano de Saúde', 'VT', 'VR'];
								$linkJob = '#';
								$modifierClass = '';
								include('components/c-job_recent.php');
							?>
						</li>
						<li>
							<?php
								$title = 'Desenvolvedor Android';
								$budget = 'Não informado';
								$cities = [
									['Criciúma', 1]
								];
								$benefits = ['VT', 'VR', 'Plano de Saúde', 'Plano odontológico', 'Participação em lucros', '14º'];
								$linkJob = '#';
								$modifierClass = '';
								include('components/c-job_recent.php');
							?>
						</li>
					</ul>
				</section>
				<section class="s-listsNumbersPerCities --left">
					<h1>Vagas</h1>
					<div class="s-listsNumbersPerCities__content">
						<h2>Por cidade</h2>
						<ul>
							<li><a href="#"><span class="caption">Criciúma</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Içara</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Forquilhinha</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Nova Veneza</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Urussanga</span><span class="number">(2)</span></a></li>
						</ul>
					</div>
					<div class="s-listsNumbersPerCities__content">
						<h2>Por área de atuação</h2>
						<ul>
							<li><a href="#"><span class="caption">Industrial</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Comercial</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Vendas</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Administração</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Transporte</span><span class="number">(2)</span></a></li>
							<li><a href="#"><span class="caption">Restaurantes</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Varejo</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Engenharia</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Informática</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Outros</span><span class="number">(2)</span></a></li>
							<li class="lastReadMore"><a href="#" class="c-linkReadMore">Ver mais</a></li>
						</ul>
					</div>
				</section>

				<section class="s-listsNumbersPerCities --right">
					<h1>Candidatos</h1>
					<div class="s-listsNumbersPerCities__content">
						<h2>Por cidade</h2>
						<ul>
							<li><a href="#"><span class="caption">Criciúma</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Içara</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Forquilhinha</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Nova Veneza</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Urussanga</span><span class="number">(2)</span></a></li>
						</ul>
					</div>
					<div class="s-listsNumbersPerCities__content">
						<h2>Por área de atuação</h2>
						<ul>
							<li><a href="#"><span class="caption">Industrial</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Comercial</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Vendas</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Administração</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Transporte</span><span class="number">(2)</span></a></li>
							<li><a href="#"><span class="caption">Restaurantes</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="caption">Varejo</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="caption">Engenharia</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="caption">Informática</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="caption">Outros</span><span class="number">(2)</span></a></li>
							<li class="lastReadMore"><a href="#" class="c-linkReadMore">Ver mais</a></li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>