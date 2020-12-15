<?php
	include('components/l-headerInner.php');
	include('components/m-login-rec-email.php');
	include('components/m-login-rec-senha.php');
	?>
<main class="l-innerPage">
	<section class="s-loginAndRegistry">
		<div class="u-container u-containerFlex">
			<div class="s-loginAndRegistry__login">
				<h1>Já tenho acesso</h1>
				<div class="c-defaultCard">
					<form action="#" class="c-simpleForm" id="formLogin">
						<ul class="u-dflex">
							<li class="u-fw100">
								<label for="formLogin_email">E-mail</label>
								<input id="formLogin_email" type="email" name="email" class="field" required>
							</li>
							<li class="u-fw100">
								<label for="formLogin_pass">E-mail</label>
								<input id="formLogin_pass" type="password" name="pass" class="field" required>
							</li>
							<li class="u-fw100 liBtn">
								<button class="c-btn --primary">Login</button>
							</li>
						</ul>
					</form>
					<ul class="loginAuxLinks">
						<li><a data-fancybox data-src="#login-rec-senha" href="javascript:;">Esqueci minha senha</a></li>
						<li><a data-fancybox data-src="#login-rec-email" href="javascript:;">Esqueci meu e-mail</a></li>
					</ul>
				</div>
			</div>
			<hr class="u-verticalHr">
			<div class="s-loginAndRegistry__registry">
				<h1>Quero criar minha conta</h1>
				<div class="c-defaultCard">
					<form action="#" class="c-simpleForm" id="formRegistry">
						<ul class="u-dflex">
							<li class="u-fw100 liRadio">
								<div>
									<label for="formRegistry_pj">Tenho uma empresa e quero <strong>anunciar vagas de emprego</strong></label>
									<input type="radio" id="formRegistry_pj" name="radioGroup">
								</div>
								<div>
									<label for="formRegistry_pf">Estou buscando um emprego</label>
									<input type="radio" id="formRegistry_pf" name="radioGroup" checked>
								</div>
							</li>
							<li class="u-fw100">
								<label for="formRegistry_email">E-mail</label>
								<input id="formRegistry_email" type="email" name="email" class="field" required>
							</li>
							<li class="u-fw100">
								<label for="formRegistry_nome" class="pf">Nome completo</label>
								<label for="formRegistry_nome" class="pj u-dnone">Nome fantasia</label>
								<input id="formRegistry_nome" type="text" name="nome" class="field" required>
							</li>
							<li class="u-fw100 liBtn">
								<button class="c-btn --primary">Continuar cadastro</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>