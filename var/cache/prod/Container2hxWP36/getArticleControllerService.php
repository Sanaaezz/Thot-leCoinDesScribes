<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\API\ArticleController' shared autowired service.
     *
     * @return \App\Controller\API\ArticleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\API\\ArticleController'] = $instance = new \App\Controller\API\ArticleController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\ArticleController', $container));

        return $instance;
    }
}
