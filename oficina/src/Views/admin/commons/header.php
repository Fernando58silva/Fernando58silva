<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Painel administrativo</title>
    <link href="<?=URL_BASE?>resources/css/css.css" rel="stylesheet"/>
    <link href="<?=URL_BASE?>resources/fonts/fontawesome/css/all.min.css" rel="stylesheet"/>
</head>
<body class="admin">
	<header>
	   <div class="container">
        <div class="left">
            <i class="fas fa-bars"></i>
            </div>
            <div class="right">
                <div class="menu">
                    <ul>
                        <li>  
                             Fernando Silva
                            <i class="fas fa-sort-down"></i>
                            <img src="<?=URL_BASE?>resources/imagens/visao.png">
                            <ul class="dropdown">
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Configurações</a></li>
                                <li><a href="#">Sair</a></li>
                            </ul>
                          </li>
                        </ul>
                    </div>
                 </div>
            </div>
    <div class="menu_lateral">
        <div class="top">
            <img src="<?=URL_BASE?>resources/imagens/logo.png">
                <hr>
                <ul>
            <li class="active">
                <a href="<?=URL_BASE?>dashboard">
                    <i class="fas fa-chart-area"></i>
                    Dashboard
                </a>
            </li>
                    <li class="nome_categoria">
                Conteúdo
            </li>
            <li>
                <a href="<?=URL_BASE?>admin/servicos">
                    <i class="fas fa-wrench"></i>
                Serviços
                </a>
            </li>
            <li>
            <a href="#">
                <i class="fab fa-youtube"></i>
                Videos
                </a>
          </li>
          <li>
            <a href="#">
                <i class="far fa-newspaper"></i>
                Blog's
            </a>
          </li>
          <li>
            <a href="#">
              <i class="far fa-comments"></i>
                Recomendações
            </a>
          </li>
          <a href="#">
          <li class="nome_categoria">
          <i class="fas fa-cogs"></i>
            configurações
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    Usuário
            </a>
            </li>
            <li>
                <a href="#">
                   
                        Site
                    </a>
                </li>
                <li>
            <a href="#">
            <i class="fas fa-sign-out-alt"></i>
                        Sair
                    </a>
                </li>
            </ul>
    </div>
        <div class="bottom">
        <div class="copy">
						Todos os direitos reservados   ₢ 2023
					</div>
					<div class="dev">
						Desenvolvido por Fernando Silva  DEV  
						<a href="https://www.instagram.com/fernando_almeida58/">
					  <i class="fab fa-instagram"></i>
				</a>
            </div>
        </div>
        <div class="close">
            <svg class="fas fa-times"></svg>
        </div>
    </div>
</header>
<div class="conteudo">