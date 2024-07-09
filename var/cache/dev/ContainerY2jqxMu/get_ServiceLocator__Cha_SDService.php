<?php

namespace ContainerY2jqxMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Cha_SDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Cha.sD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Cha.sD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sousRubriqueRepository' => ['privates', 'App\\Repository\\SousRubriqueRepository', 'getSousRubriqueRepositoryService', true],
        ], [
            'sousRubriqueRepository' => 'App\\Repository\\SousRubriqueRepository',
        ]);
    }
}
