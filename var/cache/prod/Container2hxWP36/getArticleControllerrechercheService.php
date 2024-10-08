<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllerrechercheService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.IqSceiR.App\Controller\API\ArticleController::recherche()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IqSceiR.App\\Controller\\API\\ArticleController::recherche()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
        ]))->withContext('App\\Controller\\API\\ArticleController::recherche()', $container);
    }
}
