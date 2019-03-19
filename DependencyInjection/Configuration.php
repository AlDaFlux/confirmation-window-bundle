<?php

namespace Aldaflux\ConfirmationWindowBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

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
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('confirmation_window');
        $rootNode->children()->scalarNode( 'template' )->defaultValue('bootstrap4')->end();
        $rootNode->children()->scalarNode( 'delete' )->end();
        
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
