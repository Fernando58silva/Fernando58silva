<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class adminController
{
    public function login(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "admin_login.php");
    }


    public function dashboard(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "dashboard.php");
    }
    
    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN. "/servico");
        return $renderer->render($response, "servicos.php");
    }
}