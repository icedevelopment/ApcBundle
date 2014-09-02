<?php

namespace Ornicar\ApcBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * This class contains the configuration information for the bundle
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 */
class Configuration
{
    /**
     * Generates the configuration tree.
     *
     * @return \Symfony\Component\DependencyInjection\Configuration\NodeInterface
     */
    public function getConfigTree()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('ornicar_apc', 'array')
            ->isRequired()
            ->children()
                ->scalarNode('host')->defaultFalse()->end()
                ->scalarNode('web_dir')->isRequired()->end()
                ->scalarNode('basic_auth_username')->defaultFalse()->end()
                ->scalarNode('basic_auth_password')->defaultFalse()->end()
            ->end()
        ->end();

        return $treeBuilder->buildTree();
    }
}
