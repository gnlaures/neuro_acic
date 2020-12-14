<?php include('components/l-headerInner.php'); ?>
<main class="l-innerPage">
	<section class="s-searchUser s-withSidebar">
		<div class="u-container u-containerFlex">
			<div class="s-withSidebar__aside">
				<aside class="l-asideSearchUser">
					// filters here
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
							<form action="#" class="c-simpleForm">
								<div class="u-fw100 liSelectFull">
									<div class="selectBox">
										<select name="orderResults" id="form_orderResults" class="field" required>
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