<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta content="width-device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>Painel Administrativo do Site</title>
        <link href="<?=URL_BASE?>resources/css/css.css" rel="stylesheet"/>
        <link href="<?=URL_BASE?>resources/fonts/fontawesome/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <section class="pagina_login">

    <div class="container">

        <div class="center">
        <img src="<?=URL_BASE?>resources/imagens/logo.png">
        <div class="form">
                <h1>Faça login no painel</h1>
                <form action="#">
                    <input type="text" name="login" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <button type="submit">Entrar</button>
                </form>
                <div class="resposta"></div>
            </div>
        </div>
           <div class="bottom">
           <div class="copy">
						Todos os direitos reservados   ₢ 2022
					</div>
					<div class="dev">
						Desenvolvido por Fernando Silva  DEV  
						<a href="https://www.instagram.com/fernando_almeida58/">
					  <i class="fab fa-instagram"></i>
					</a>
				</div>
          </div>
        </div>
   </section>
    <script src="<?=URL_BASE?>resources/js/jquery/jquery.min.js"></script>
    <script src="<?=URL_BASE?>resources/js/js.min.js"></script>
    <script src="<?=URL_BASE?>resources/fonts/fontawesome/js/all.min.js"></script>
    </body>
</html>

