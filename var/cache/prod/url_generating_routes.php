<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_article_recherche' => [[], ['_controller' => 'App\\Controller\\API\\ArticleController::recherche'], [], [['text', '/api/article/recherche']], [], [], []],
    'app_article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'app_article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], [], []],
    'app_article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_article_validation' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::showadmin'], [], [['text', '/validation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::logout'], [], [['text', '/logout']], [], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'app_commentaire_new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'app_commentaire_show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\HomeController::tabadmin'], [], [['text', '/admin']], [], [], []],
    'app_auteur' => [[], ['_controller' => 'App\\Controller\\HomeController::tabauteur'], [], [['text', '/auteur']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\API\ArticleController::recherche' => [[], ['_controller' => 'App\\Controller\\API\\ArticleController::recherche'], [], [['text', '/api/article/recherche']], [], [], []],
    'App\Controller\ArticleController::index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'App\Controller\ArticleController::new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], [], []],
    'App\Controller\ArticleController::show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\ArticleController::showadmin' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::showadmin'], [], [['text', '/validation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\ArticleController::edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\ArticleController::delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\AuthentificationController::login' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\AuthentificationController::logout' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\CommentaireController::index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'App\Controller\CommentaireController::show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::tabadmin' => [[], ['_controller' => 'App\\Controller\\HomeController::tabadmin'], [], [['text', '/admin']], [], [], []],
    'App\Controller\HomeController::tabauteur' => [[], ['_controller' => 'App\\Controller\\HomeController::tabauteur'], [], [['text', '/auteur']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\UtilisateurController::index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
];
