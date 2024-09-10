<?php

namespace ContainerNMdzXAs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XGH41tEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XGH41tE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XGH41tE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\UsersAuthenticator', 'getUsersAuthenticatorService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'mail' => ['privates', 'App\\Service\\SendEmailService', 'getSendEmailServiceService', true],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'authenticator' => 'App\\Security\\UsersAuthenticator',
            'entityManager' => '?',
            'jwt' => 'App\\Service\\JWTService',
            'mail' => 'App\\Service\\SendEmailService',
            'userAuthenticator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
