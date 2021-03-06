<?php

namespace ContainerUefsxn8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VjebBB2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vjebBB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vjebBB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productsRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'productsRepository' => 'App\\Repository\\ArticleRepository',
        ]);
    }
}
