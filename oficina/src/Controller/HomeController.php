<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php");
    }

    public function a_FMG(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);

        $data['informacoes'] = array(
            'title' => 'A FMG',
            'descricao' => 'Aqui vem a descricao da pagina institucional'
        );

        return $renderer->render($response, "a_FMG.php", $data); 
    }
   
    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'Nossos Serviços',
            'descricao' => 'Aqui vem a descricao da pagina servicos'
        );
        return $renderer->render($response, "servicos.php", $data); 
    }

    public function videos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'videos',
            'descricao' => 'Aqui vem a descricao da pagina videos'
        );
        return $renderer->render($response, "videos.php", $data); 
    }

    public function blog(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'blog',
            'descricao' => 'Aqui vem a descricao da pagina blog'
        );
        return $renderer->render($response, "blog.php", $data); 
    }

    public function contatos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        $data['informacoes'] = array(
            'title' => 'contatos',
            'descricao' => 'Aqui vem a descricao da pagina contatos'
        );
        return $renderer->render($response, "contatos.php", $data); 
    }

    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);

        $url = $args['any'];

       if($url === "noticia-teste"){
        $data['informacoes'] = array(
            'title' => 'Noticia  teste',
            'descricao' => 'Aqui vem a descricao da pagina de noticia'
        );

        return $renderer->render($response, "blog_detalhe.php", $data); 

    }else{
        $data['informacoes'] = array(
            'title' => 'Ar Condicionado',
            'descricao' => 'Aqui vem a descricao da pagina de servico'
        );
        return $renderer->render($response, "servico_detalhe.php", $data); 
       }
        }
    }
      

        
    