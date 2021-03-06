<?php include('components/l-headerInner.php'); ?>
<main class="l-innerPage">
	<section class="s-userRegistry s-withSidebar">
		<div class="u-container u-containerFlex u-aifs">
			<div class="s-withSidebar__aside u-pos-sticky">
				<aside class="l-asideSteps">
					<ul class="c-defaultCard">
						<li><a href="#etapa-01" class="js-scrollLink">01 - <strong>LGPD</strong></a></li>
						<li><a href="#etapa-02" class="js-scrollLink">02 - <strong>Acesso</strong></a></li>
						<li><a href="#etapa-03" class="js-scrollLink">03 - <strong>Dados pessoais</strong></a></li>
					</ul>
				</aside>
			</div>
			<div class="s-withSidebar__content">
				<h1>Cadastro de candidato</h1>
				<form action="#" class="c-simpleForm" id="formUserRegistry">
					<div id="etapa-01" class="c-simpleForm__step">
						<h2>Etapa 01 de 03 - LGPD</h2>
						<div class="c-defaultCard">
							<ul class="u-dflex">
								<li>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cumque dolores, eaque eos fugiat impedit laboriosam, libero magnam maxime minus odio, quaerat quia ullam? Ab alias consectetur corporis ipsa, nobis nulla perferendis perspiciatis quibusdam voluptatem voluptates. Alias architecto doloremque eaque error facere illum, ipsa iste molestias nihil officiis porro quasi repudiandae, rerum saepe totam! Accusamus beatae deserunt, expedita explicabo facere fugiat ipsum itaque laboriosam modi nisi, obcaecati perferendis quo rem repellendus, sunt unde vitae voluptatibus? At beatae eveniet officia quae.</p>
								</li>
								<li class="u-fw100 liCheckbox">
									<div>
										<label for="option_lgpd">Li e aceito o termo de consentimento acima.</label>
										<input type="checkbox" id="option_lgpd">
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div id="etapa-02" class="c-simpleForm__step js-startHidden u-dnone">
						<h2>Etapa 02 de 03 - Dados de acesso ao Banco de Talentos</h2>
						<div class="c-defaultCard">
							<div class="c-toggleList is-active">
								<div class="c-toggleList__header">
									<h3>Cadastrar e-mail e senha</h3>
								</div>
								<div class="c-toggleList__content">
									<ul class="u-dflex">
										<li class="u-fw50">
											<label for="formUserRegistry_email">E-mail</label>
											<input id="formUserRegistry_email" type="email" name="email" class="field" required>
										</li>
										<li class="u-fw50">
											<label for="formUserRegistry_email_confirmacao">Confirmar E-mail</label>
											<input id="formUserRegistry_email_confirmacao" type="email" name="email_confirmacao" class="field" required>
										</li>
										<li class="u-fw50">
											<label for="formUserRegistry_senha">Senha</label>
											<input id="formUserRegistry_senha" type="password" name="senha" class="field" required>
										</li>
										<li class="u-fw50">
											<label for="formUserRegistry_senha_confirmacao">Confirmar Senha</label>
											<input id="formUserRegistry_senha_confirmacao" type="password" name="senha_confirmacao" class="field" required>
										</li>
									</ul>
								</div>
							</div>
							<div class="c-toggleList">
								<div class="c-toggleList__header">
									<h3>ou importe dados de um serviço externo (opcional)</h3>
								</div>
								<div class="c-toggleList__content">
									<p>Ligando sua conta ACIC com sua rede social favorita lhe dará a facilidade de fazer login sem ter que lembrar uma senha ou e-mail;</p>
									<ul class="u-dflex u-aic u-jcfs u-wrap integrationsLinks">
										<li><a href="#" class="c-btn --google">Integrar com o Google</a></li>
										<li><a href="#" class="c-btn --facebook">Integrar com o Facebook</a></li>
										<li><a href="#" class="c-btn --linkedin">Integrar com o Linkedin</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div id="etapa-03" class="c-simpleForm__step js-startHidden u-dnone">
						<h2>Etapa 03 de 03 - Dados pessoais</h2>
						<div class="c-defaultCard --adjustFormPadding">
							<ul class="u-dflex">
								<li class="u-fw50">
									<label for="formUserRegistry_nomeFantasia">Primeiro Nome*</label>
									<input id="formUserRegistry_nomeFantasia" type="text" name="nomeFantasia" class="field" required>
								</li>
								<li class="u-fw50">
									<label for="formUserRegistry_nomeFantasia">Sobrenome*</label>
									<input id="formUserRegistry_nomeFantasia" type="text" name="nomeFantasia" class="field" required>
								</li>
							</ul>
							<ul class="u-dflex">
								<li class="u-fw50">
									<label for="fformUserRegistry_email">E-mail</label>
									<input id="fformUserRegistry_email" type="email" name="email" class="field" placeholder="example@site.com" required>
								</li>
								<li class="u-fw50">
									<label for="fformUserRegistry_telefone">Telefone</label>
									<input id="fformUserRegistry_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
								</li>
							</ul>
							<ul class="u-dflex">
								<li class="u-fw33">
									<label for="fformUserRegistry_cpf">CPF</label>
									<input id="fformUserRegistry_cpf" type="text" class="field cpfMask" name="cpf" placeholder="___.___.___-__" required>
								</li>
								<li class="u-fw33">
									<label for="fformUserRegistry_data">Data</label>
									<input id="fformUserRegistry_data" type="text" class="field dataMask" name="data" placeholder="__/__/____" required>
								</li>
							</ul>
						</div>
					</div>
					<div class="c-simpleForm__step js-startHidden u-dnone">
						<div class="u-dflex u-jcfe">
							<button class="c-btn --primary">Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>