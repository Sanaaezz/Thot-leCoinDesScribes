<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthentificationAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\AuthentificationAuthenticator' shared autowired service.
     *
     * @return \App\Security\AuthentificationAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\AuthentificationAuthenticator'] = new \App\Security\AuthentificationAuthenticator(($container->services['router'] ?? self::getRouterService($container)));
    }
}
