<?php
use Slim\App;
return function (App $app) {
        $app->get('/','\App\Controller\HomeController:home');

        $app->get('/admin-login','\App\Controller\AdminController:login');
        $app->get('/dashboard','\App\Controller\AdminController:dashboard');
        $app->get('/admin/servicos','\App\Controller\AdminController:servicos');

        $app->get('/a_FMG', '\App\Controller\HomeController:a_FMG');
        $app->get('/servicos', '\App\Controller\HomeController:servicos');
        $app->get('/videos', '\App\Controller\HomeController:videos');
        $app->get('/blog', '\App\Controller\HomeController:blog');
        $app->get('/contatos', '\App\Controller\HomeController:contatos');
        $app->get('/{any}', '\App\Controller\HomeController:page');
};
