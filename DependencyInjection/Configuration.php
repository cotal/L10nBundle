<?php

namespace L10nBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('l10n_bundle');
        $rootNode
            ->children()
                ->scalarNode('default_localization')->isRequired()->end()
                ->scalarNode('default_locale')->isRequired()->end()
                ->scalarNode('export_dir')->isRequired()->end()
                ->scalarNode('manager')->isRequired()->end()
                ->arrayNode('yaml')
                    ->children()
                        ->scalarNode('data_file')->end()
                    ->end()
                ->end()
                ->arrayNode('mongodb')
                    ->children()
                        ->scalarNode('host')->end()
                        ->scalarNode('port')->end()
                        ->scalarNode('username')->end()
                        ->scalarNode('password')->end()
                        ->scalarNode('database')->end()
                    ->end()
                ->end()

            ->end()
        ;

        return $treeBuilder;
    }
}