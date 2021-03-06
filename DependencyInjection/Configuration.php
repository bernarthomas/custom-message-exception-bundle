<?php
/**
 * CustomMessageExceptionBundle Configuration
 *
 * Define the CustomMessageExceptionBundle configuration
 *
 * @package      Bt
 * @subpackage   Bundle/CustomMessageExceptionBundle
 * @category     Configuration
 * @author       B Thomas <bernarthomas@free.fr>
 * @version      master
 * @licence      MIT license
 */

namespace Bt\Bundle\CustomMessageExceptionBundle\DependencyInjection;

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

        return $treeBuilder;
    }
}
