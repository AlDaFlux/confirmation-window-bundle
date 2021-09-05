<?php

namespace Aldaflux\ConfirmationWindowBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


use Symfony\Component\HttpKernel\Kernel;

        
/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        //$treeBuilder = new TreeBuilder();
        
        $treeBuilder = new TreeBuilder('confirmation_window');
        if (Kernel::VERSION_ID >= 40200) 
        {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('confirmation_window');
        }        

        
        $rootNode->children()->scalarNode( 'template' )->defaultValue('bootstrap4')->end();
        $rootNode->children()->scalarNode( 'delete' )->defaultValue('false')->end();

        
        $rootNode->children()
            ->arrayNode('customs')
                ->prototype('array')
                    ->children()
                         ->scalarNode('selector')->isRequired()->cannotBeEmpty()->end()
                         ->scalarNode('title')->end()
                         ->scalarNode('class')->defaultValue('default')->end()
                         ->scalarNode('content')->end()
                         ->scalarNode('button')->end()
                    ->end()
            ->end()
        ->end();
        
        $rootNode->children()
            ->arrayNode('alerts')
            ->useAttributeAsKey('name')
                ->prototype('array')
                    ->children()
                         ->scalarNode('selector')->isRequired()->cannotBeEmpty()->end()
                         ->scalarNode('title')->end()
                         ->scalarNode('class')->defaultValue('default')->end()
                         ->scalarNode('content')->end()
                         ->scalarNode('button')->end()
                    ->end()
            ->end()
        ->end();
                


        return $treeBuilder;
    }
}
