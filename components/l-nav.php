<nav class="l-nav">
	<div class="l-nav__global">
		<div class="u-container u-containerFlex">
			<ul class="c-globalLinks">
				<li><a href="#">Associe-se gratuitamente</a></li>
				<li><a href="#">Cursos ACIC</a></li>
				<li><a href="#">Anunciar vaga</a></li>
				<li><a href="#">Cadastrar currículo</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
			<div class="c-globalPhone">
				<a href="#">
					<div class="content">
						<strong>suporte <span class="number">3461-0900</span></strong>
						<span class="time">seg à sex - 08h às 18h</span>
					</div>
					<i><?php include('media/img/icons/icon_phone.svg'); ?></i>
				</a>
			</div>
		</div>
	</div>
	<div class="l-nav__default">
		<div class="u-container u-containerFlex">
			<div class="l-nav__brand">
				<a href="home" title="<?php echo $title; ?>">
					<img src="media/img/assets/brand.png" alt="<?php echo $title; ?>">
				</a>
			</div>
			<div class="l-nav__contentHero">
				<ul class="l-nav__menu">
					<li class="c-subMenu">
						<span class="c-subMenu__mask"></span>
						<a class="c-subMenu__call js-subMenuPrimary">Institucional</a>
						<div class="c-subMenu__content">
							<ul>
								<li><a href="#">Lorem Ipsum</a></li>
								<li><a href="#">Lorem Ipsum</a></li>
							</ul>
						</div>
					</li>
					<li class="c-subMenu">
						<span class="c-subMenu__mask"></span>
						<a class="c-subMenu__call js-subMenuPrimary">Para Empresas</a>
						<div class="c-subMenu__content">
							<ul>
								<li><a href="#">Lorem Ipsum</a></li>
								<li><a href="#">Lorem Ipsum</a></li>
							</ul>
						</div>
					</li>
					<li class="c-subMenu">
						<span class="c-subMenu__mask"></span>
						<a class="c-subMenu__call js-subMenuPrimary">Para Candidatos</a>
						<div class="c-subMenu__content">
							<ul>
								<li><a href="#">Lorem Ipsum</a></li>
								<li><a href="#">Lorem Ipsum</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="l-nav__maskMenu maskMenu"></div>
			</div>
			<div class="l-nav__userActions">
				<div class="c-ctaUserCapture">
					<a href="#" class="c-btn --primary">Login</a>
					<a href="#" class="c-btn --primary">Cadastre-se</a>
				</div>
				<div class="c-loggedUser">
					<div class="c-subMenu">
						<span class="c-subMenu__mask"></span>
						<a class="c-subMenu__call js-subMenuPrimary">
							<?php
								$modifierClass = '';
								$userPic = '1.jpg';
								$userCode = '#01234578';
								$userFirstName = 'Guilherme';
								$userLastName = 'Laureano';
								include ('components/c-userId.php');
							?>
						</a>
						<div class="c-subMenu__content">
							<?php
								include ('components/c-userId.php');
							?>
							<ul>
								<li><a href="#">Meu painel</a></li>
								<li><a href="#">Minha conta</a></li>
								<li><a href="#">Meu currículo</a></li>
								<li><a href="#">Aviso de vagas</a></li>
								<li><a href="#">Minhas candidaturas</a></li>
								<li class="exitLogin"><a href="#">Sair</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<div class="l-nav__maskMenu maskAll"></div>
			<div class="c-hamburguer">
				<div class="c-hamburguer__hero">
					<span class="bar bar_1"></span>
					<span class="bar bar_2"></span>
					<span class="bar bar_3"></span>
				</div>
			</div>
		</div>
	</div>
</nav>