<?php
	include('components/l-headerInner.php');
	include('components/m-confirmacao-candidato-vaga.php');
	?>

<main class="l-innerPage">
	<section class="s-searchUser s-withSidebar">
		<div class="u-container u-containerFlex">
			<div class="s-withSidebar__aside">
				<aside class="l-asideSearchUser">
					<form action="#" class="c-simpleForm" id="formSearchUser">
						<ul>
							<li class="u-fw100 liPluginSelect2">
								<label for="formSearchUser_area">Área de atuação</label>
								<select class="js-select2__basic" name="areas[]" multiple="multiple" id="formSearchUser_area" data-maximum-selection-length="5">
									<option></option>
									<option value="Comercial">Comercial</option>
									<option value="Vendas">Vendas</option>
									<option value="Administração">Administração</option>
									<option value="Transporte">Transporte</option>
									<option value="Restaurantes">Restaurantes</option>
									<option value="Varejo">Varejo</option>
									<option value="Engenharia">Engenharia</option>
									<option value="Informática">Informática</option>
									<option value="Outros">Outros</option>
								</select>
							</li>
							<li class="u-fw100 liPluginSelect2">
								<label for="formSearchUser_cidade">Cidade</label>
								<select class="js-select2__basic" name="cidades[]" multiple="multiple" id="formSearchUser_cidade" data-maximum-selection-length="5">
									<option></option>
									<option value="C1">Cidade 1</option>
									<option value="C2">Cidade 2</option>
									<option value="C3">Cidade 3</option>
									<option value="C4">Cidade 4</option>
									<option value="C5">Cidade 5</option>
									<option value="C6">Cidade 6</option>
									<option value="C7">Cidade 7</option>
									<option value="C8">Cidade 8</option>
								</select>
							</li>
							<li class="u-fw100 liPluginSelect2">
								<label for="formSearchUser_salario">Faixa Salarial</label>
								<select class="js-select2__basic" name="salarios[]" multiple="multiple" id="formSearchUser_salario" data-maximum-selection-length="5">
									<option></option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
									<option value="xx-yy">De XX,00 à YY,00</option>
								</select>
							</li>
							<li class="u-fw100">
								<label for="formSearchUser_keyword">Palavra-chave</label>
								<input id="formSearchUser_keyword" type="text" name="keyword" class="field">
							</li>
							<li class="u-fw100 liCheckbox">
								<label for="#">Filtros extras</label>
								<div>
									<label for="formSearchUser_option1">Mostrar somente vagas para pessoas
										com necessidades especiais.</label>
									<input type="checkbox" id="formSearchUser_option1">
								</div>
								<div>
									<label for="formSearchUser_option2">Mostrar apenas vagas que oferecem
										benefícios extras.</label>
									<input type="checkbox" id="formSearchUser_option2">
								</div>
								<div>
									<label for="formSearchUser_option3">Mostrar apenas vagas que combinam
										com meu currículo.</label>
									<input type="checkbox" id="formSearchUser_option3">
								</div>
							</li>
						</ul>
					</form>
					<div class="c-adsFeature">
						<a href="#">
							<picture>
								<source media="(min-width:900px)" srcset="media/img/content/publiAd/cursos_2.png">
								<img src="media/img/content/publiAd/cursos_1__mobile.png" alt="Cursos ACIC">
							</picture>
						</a>
					</div>
				</aside>
			</div>
			<div class="s-withSidebar__content">
				<div class="s-searchUser__header">
					<div class="header__title">
						<h1>Buscar vagas</h1>
						<h2>426 vagas encontradas</h2>
					</div>
					<div class="header__filters">
						<div class="filter__orderBy">
							<form action="#" class="c-simpleForm" id="formFilterResultsSearchUsers">
								<div class="u-fw100 liSelectFull">
									<div class="selectBox">
										<select name="orderResults" id="formFilterResultsSearchUsers_orderResults" class="field">
											<option value="">Selecionar ordenação</option>
											<option value="order_1">Ordem alfabética</option>
											<option value="order_2">Grau de compatibilidade</option>
											<option value="order_3">Faixa salarial</option>
										</select>
										<div class="inputBox">
											<input type="text" placeholder="Selecionar ordenação" readonly>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="filter__layout">
							<span class="js-removeMinClass is-active">
								<?php include('media/img/icons/icon_densidade_1.svg'); ?>
							</span>
							<span class="js-addMinClass">
								<?php include('media/img/icons/icon_densidade_2.svg'); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="s-searchUser__content">
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
					<?php include('components/c-job_master.php'); ?>
				</div>
				<div class="s-searchUser__footer">
					<div class="c-pagination u-dflex u-aic u-jcsb">
						<a href="#" class="c-pagination__prev is-disabled">Anterior</a>
						<ul class="c-pagination__pages u-dflex u-jcc u-aic">
							<li><a href="#" class="is-active">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
						</ul>
						<a href="#" class="c-pagination__next">Próxima</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>