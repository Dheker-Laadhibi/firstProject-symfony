<?php

namespace ContainerVCqYdhU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_CurrentCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.current_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\CurrentCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CurrentCommand.php';

        $container->privates['doctrine_migrations.current_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\CurrentCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:current');

        $instance->setName('doctrine:migrations:current');
        $instance->setDescription('Outputs the current version');

        return $instance;
    }
}
