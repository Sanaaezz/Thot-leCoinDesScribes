<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllershowadminService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.AazXZCq.App\Controller\ArticleController::showadmin()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.AazXZCq'] ?? $container->load('get_ServiceLocator_AazXZCqService'));

        if (isset($container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::showadmin()'])) {
            return $container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::showadmin()'];
        }

        return $container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::showadmin()'] = $a->withContext('App\\Controller\\ArticleController::showadmin()', $container);
    }
}
