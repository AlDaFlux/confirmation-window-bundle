<?php

namespace Aldaflux\ConfirmationWindowBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class AldafluxConfirmationWindowExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter( 'confirmation_window.delete', $config[ 'delete' ] );
        $container->setParameter( 'confirmation_window.customs', $config[ 'customs' ] );
        $container->setParameter( 'confirmation_window.template', $config[ 'template' ] );
        $container->setParameter( 'confirmation_window.alerts', $config[ 'alerts' ] );
        
        
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
