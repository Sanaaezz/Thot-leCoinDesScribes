<?php

namespace Container2hxWP36;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UtilisateurType' shared autowired service.
     *
     * @return \App\Form\UtilisateurType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UtilisateurType'] = new \App\Form\UtilisateurType();
    }
}
