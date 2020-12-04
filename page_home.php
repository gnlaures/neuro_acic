<header class="l-headerHome">
	<div class="u-container">
		<div class="l-headerHome__slide">
			<div class="swiper__headerHome swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h1>Lorem ipsum dolor sit consec adetetur adipiscing eliam ut est id nibh sagittis tincidunt et vitae placerat rhnocs.</h1>
						<p>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</p>
						<a href="#" class="c-btn --secondary">Anunciar vaga gratuitamente</a>
					</div>
					<div class="swiper-slide">
						<h1>Lorem ipsum dolor sit consec adetetur adipiscing eliam ut est id nibh sagittis tincidunt et vitae placerat rhnocs.</h1>
						<p>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</p>
						<a href="#" class="c-btn --secondary">Cadastre seu currículo</a>
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
			<p>Aliquam placerat, lectus id scelerisque, mi dui gravida enim, sed rhoncus lib.</p>
			<div class="swiper__numbersOfAssociation swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="c-cardNumberOfAssociation">
							<h3 class="number">451</h3>
							<p>Vagas preenchidas pelo Banco de Talentos nos últimos 90 dias</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="c-cardNumberOfAssociation">
							<h3 class="number">2.112</h3>
							<p>Empresas anunciantes no Banco de Talentos nos últimos 90 dias</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="c-cardNumberOfAssociation">
							<h3 class="number">3.511</h3>
							<p>Candidatos ativos no Banco de Talentos nos últimos 90 dias</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="c-cardNumberOfAssociation">
							<h3 class="number">10.026</h3>
							<p>Vagas anunciadas pelo Banco de talentos em 2020</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="c-cardNumberOfAssociation">
							<h3 class="number">597</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div>
				</div>
			</div>
			<span class="smallObservation">* Dados atualizados em tempo real</span>
		</div>
	</section>
	<section class="s-testemonials">
		<div class="u-container u-containerFlex">
			<div class="s-testemonials__primary">
				<div class="primary__l">
					<div class="c-videoLink">
						<a href="#" title="Lorem Ipsum sit - Título do vídeo" class="c-videoLink__cover u-aspectRatio u-aspectRatio--16-9">
							<img src="media/img/content/testemonials/videoCover.jpg" alt="Lorem Ipsum sit - Título do vídeo">
						</a>
						<a href="#" title="Lorem Ipsum sit - Título do vídeo" class="c-videoLink__icon">
							<i><?php include('media/img/icons/icon_play.svg'); ?></i>
						</a>
					</div>
				</div>
				<div class="primary__r">
					<div class="c-adsFeature">
						<a href="#">
							ads here
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
						<blockquote class="c-cardTestemonial">
							<div class="c-cardTestemonial__head">
								<figure class="c-userThumb">
									<img src="media/img/content/users/2.jpg" alt="Caroline Gomes">
								</figure>
								<div>
									<cite class="author">Caroline Gomes</cite>
									<span class="company">Conquistou a vaga de <strong>Aux. Administrativa</strong></span>
								</div>
							</div>
							<div class="c-cardTestemonial__quote">
								<p>"Eu acho ótima o Banco de Talentos da ACIC e as ferramentas de busca. Meus últimos dois empregos e agora esse novo foram através da ferramenta, dois deles ainda no período grátis"</p>
							</div>
							<div class="c-cardTestemonial__stars">
								<div class="c-reviewStars --5"></div>
							</div>
						</blockquote>
					</li>
					<li>
						<blockquote class="c-cardTestemonial">
							<div class="c-cardTestemonial__head">
								<figure class="c-userThumb">
									<img src="media/img/content/users/3.jpg" alt="Kenneth Lopez">
								</figure>
								<div>
									<cite class="author">Kenneth Lopez</cite>
									<span class="company">Conquistou a vaga de <strong>Designer Gráfico</strong></span>
								</div>
							</div>
							<div class="c-cardTestemonial__quote">
								<p>"É o meu segundo emprego na carreira, e é o segundo que consigo atraves do Banco de Talentos da ACIC"</p>
							</div>
							<div class="c-cardTestemonial__stars">
								<div class="c-reviewStars --4"></div>
							</div>
						</blockquote>
					</li>
					<li>
						<blockquote class="c-cardTestemonial">
							<div class="c-cardTestemonial__head">
								<figure class="c-userThumb">
									<img src="media/img/content/users/4.jpg" alt="Alice Nicholz">
								</figure>
								<div>
									<cite class="author">Alice Nicholz</cite>
									<span class="company">Conquistou a vaga de <strong>Contadora</strong></span>
								</div>
							</div>
							<div class="c-cardTestemonial__quote">
								<p>"É o melhor serviço de recolocação no mercado de trabalho, além de disponibilizar vagas, tem cursos, teste vocacional, guia de profissões e outros benefícios. É completo!"</p>
							</div>
							<div class="c-cardTestemonial__stars">
								<div class="c-reviewStars --3"></div>
							</div>
						</blockquote>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="l-homeCentralContent">
		<div class="u-container">
			<div class="l-homeCentralContent__l">
				<section class="s-recentBlogPosts">
					<h1>Conteúdos recentes</h1>
					<ul>
						<li>
							<a href="#" class="c-cardRecentPost">
								<article>
									<figure class="c-cardRecentPost__figure">
										<img src="media/img/content/blog/post1.jpg" alt="Como fazer um currículo sem experiência e sem ensino superior">
									</figure>
									<h2 class="c-cardRecent__title">Como fazer um currículo sem experiência e sem ensino superior</h2>
									<p class="c-cardRecent__resume">Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.</p>
									<span class="c-linkReadMore">Ver mais</a>
								</article>
							</a>
						</li>
						<li>
							<a href="#" class="c-cardRecentPost">
								<article>
									<figure class="c-cardRecentPost__figure">
										<img src="media/img/content/blog/post1.jpg" alt="Como fazer um currículo sem experiência e sem ensino superior">
									</figure>
									<h2 class="c-cardRecent__title">Como fazer um currículo sem experiência e sem ensino superior</h2>
									<p class="c-cardRecent__resume">Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.</p>
									<span class="c-linkReadMore">Ver mais</a>
								</article>
							</a>
						</li>
						<li>
							<a href="#" class="c-cardRecentPost">
								<article>
									<h2 class="c-cardRecent__title">Como fazer um currículo sem experiência e sem ensino superior</h2>
									<p class="c-cardRecent__resume">Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.</p>
									<span class="c-linkReadMore">Ver mais</a>
								</article>
							</a>
						</li>
						<li>
							<a href="#" class="c-cardRecentPost">
								<article>
									<h2 class="c-cardRecent__title">Como fazer um currículo sem experiência e sem ensino superior</h2>
									<p class="c-cardRecent__resume">Fazer um currículo não é uma tarefa nada fácil. Ainda mais quando você não tem experiência ou ensino superior.</p>
									<span class="c-linkReadMore">Ver mais</a>
								</article>
							</a>
						</li>
					</ul>
				</section>
			</div>
			<div class="l-homeCentralContent__r">
				<section class="s-recentJobs">
					<h1>Vagas recentes</h1>
					<ul>
						<li>
							<a href="#" class="c-cardRecentJob">
								<div class="c-cardRecentJob__head">
									<div class="c-cardRecentJob__places">
										<i>icon</i>
										<p>Siderópolis <span>(3)</span>, Içara <span>(3)</span></p>
									</div>
									<div class="c-cardRecentJob__budget">R$ 4.500,00 - R$ 6.000,00</div>
								</div>
								<h2 class="c-cardRecentJob__title">Gerente de projetos</h2>
								<div class="c-cardRecentJob__benefits">
									<ul class="c-listBenefits">
										<li>Plano de saúde</li>
										<li>VT</li>
										<li>VR</li>
									</ul>
								</div>
								<div class="c-cardRecentJob__more">
									zoom
								</div>
							</a>
						</li>
					</ul>
				</section>
				<section class="s-listsNumbersPerCities --left">
					<h1>Vagas</h1>
					<div class="s-listNumbersPerCities__content">
						<h2>Por cidade</h2>
						<ul>
							<li><a href="#"><span class="city">Criciúma</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Içara</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Forquilhinha</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Nova Veneza</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Urussanga</span><span class="number">(2)</span></a></li>
						</ul>
					</div>
					<div class="s-listNumbersPerCities__content">
						<h2>Por área de atuação</h2>
						<ul>
							<li><a href="#"><span class="city">Industrial</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Comercial</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Vendas</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Administração</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Transporte</span><span class="number">(2)</span></a></li>
							<li><a href="#"><span class="city">Restaurantes</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Varejo</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Engenharia</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Informática</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Outros</span><span class="number">(2)</span></a></li>
						</ul>
						<a href="#" class="c-linkReadMore">Ver mais</a>
					</div>
				</section>
				<section class="s-listsNumbersPerCities --right">
					<h1>Candidatos</h1>
					<div class="s-listNumbersPerCities__content">
						<h2>Por cidade</h2>
						<ul>
							<li><a href="#"><span class="city">Criciúma</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Içara</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Forquilhinha</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Nova Veneza</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Urussanga</span><span class="number">(2)</span></a></li>
						</ul>
					</div>
					<div class="s-listNumbersPerCities__content">
						<h2>Por área de atuação</h2>
						<ul>
							<li><a href="#"><span class="city">Industrial</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Comercial</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Vendas</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Administração</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Transporte</span><span class="number">(2)</span></a></li>
							<li><a href="#"><span class="city">Restaurantes</span><span class="number">(547)</span></a></li>
							<li><a href="#"><span class="city">Varejo</span><span class="number">(95)</span></a></li>
							<li><a href="#"><span class="city">Engenharia</span><span class="number">(22)</span></a></li>
							<li><a href="#"><span class="city">Informática</span><span class="number">(08)</span></a></li>
							<li><a href="#"><span class="city">Outros</span><span class="number">(2)</span></a></li>
						</ul>
						<a href="#" class="c-linkReadMore">Ver mais</a>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>