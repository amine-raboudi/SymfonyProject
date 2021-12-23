<?php

namespace ContainerMZRpx0g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeAdminMigrationCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:admin:migration', [], 'Migrates EasyAdmin2 YAML config into EasyAdmin 3 PHP config classes', false, function () use ($container): \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand {
            return ($container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand'] ?? $container->load('getMakeAdminMigrationCommandService'));
        });
    }
}
