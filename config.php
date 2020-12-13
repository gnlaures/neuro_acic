<?php
	$http = 'http://';
	$urllocal = '/neuro_acic';
	$title = 'Banco de Talentos';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	#Identifica se é home ou inner page
	$classOnBody = 'p-inner';
	
	switch ($pagina) {
		#Boilerplate
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;

		#Cadastro e login
		case 'login':
			$file = 'page_login.php';
			$title_page = 'Login / Registro - '.$title;
			break;
		case 'cadastro-candidato':
			$file = 'page_cadastro_candidato.php';
			$title_page = 'Cadastro de candidato - '.$title;
			break;
		case 'cadastro-empresa':
			$file = 'page_cadastro_empresa.php';
			$title_page = 'Cadastro de empresa - '.$title;
			break;

		#Buscas
		case 'busca-vagas':
			$file = 'page_buscaVagas.php';
			$title_page = 'Buscar vagas - '.$title;
			break;
		case 'busca-candidatos':
			$file = 'page_buscaCandidatos.php';
			$title_page = 'Buscar candidatos - '.$title;
			break;
		case 'busca-resultados-vagas':
			$file = 'page_buscaVagasResultados.php';
			$title_page = 'Vagas encontradas - '.$title;
			break;
		case 'busca-resultados-candidatos':
			$file = 'page_buscaCandidatosResultados.php';
			$title_page = 'Candidatos encontrados - '.$title;
			break;

		#Perfis
		case 'perfil-candidato':
			$file = 'page_perfilCandidato.php';
			$title_page = 'Perfil do candidato - '.$title;
			break;
		case 'perfil-empresa':
			$file = 'page_perfilEmpresa.php';
			$title_page = 'Perfil da empresa - '.$title;
			break;

		#Institucionais
		case 'contato':
			$file = 'page_institucional_contato.php';
			$title_page = 'Contato - '.$title;
			break;
		case 'quem-somos':
			$file = 'page_institucional_sobre.php';
			$title_page = 'Quem somos - '.$title;
			break;
		case 'ajuda':
			$file = 'page_institucional_ajuda.php';
			$title_page = 'Ajuda - '.$title;
			break;

		#Blog / Conteudos
		case 'conteudos':
			$file = 'page_conteudos.php';
			$title_page = 'Conteúdos - '.$title;
			break;
		case 'conteudos-post':
			$file = 'page_conteudosPost.php';
			$title_page = 'Título do conteúdo - '.$title;
			break;

		#Home
		case '' :
		case 'home' :
		default :
			$file = 'page_home.php';
			$title_page = $title;
			$classOnBody = 'p-home';
			break;
	}

#Monta a base url
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>