<?php

namespace ContainerNMdzXAs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_RoutableMessageBusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/RoutableMessageBus.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['messenger.routable_message_bus'])) {
            return $container->privates['messenger.routable_message_bus'];
        }

        return $container->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), $a);
    }
}
