<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthentificationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AuthentificationController' shared autowired service.
     *
     * @return \App\Controller\AuthentificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AuthentificationController'] = $instance = new \App\Controller\AuthentificationController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\AuthentificationController', $container));

        return $instance;
    }
}
