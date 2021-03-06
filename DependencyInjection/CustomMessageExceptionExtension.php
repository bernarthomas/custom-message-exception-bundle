<?php
/**
 * CustomMessageException Extension
 *
 * Define the CustomMessageExceptionBundle extension
 *
 * @package      Bt
 * @subpackage   Bundle/CustomMessageExceptionBundle
 * @category     Extension
 * @author       B Thomas <bernarthomas@free.fr>
 * @version      master
 * @licence      MIT license
 */

namespace Bt\Bundle\CustomMessageExceptionBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages CustomMessageExceptionBundle.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class CustomMessageExceptionExtension extends Extension
{
    /**
     * Load the config
     *
     * @param array $configs
     *
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
