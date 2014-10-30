<?php namespace Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator;

use Anomaly\Streams\Platform\Addon\Extension\ExtensionAddon;

/**
 * Class UsersModuleDefaultAuthenticatorExtension
 *
 * This is the default authenticator for the Users module.
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator
 */
class UsersModuleDefaultAuthenticatorExtension extends ExtensionAddon
{

    /**
     * Authenticate the credentials.
     *
     * @param $credentials
     * @return mixed
     */
    public function authenticate($credentials)
    {
        $repository = app('Anomaly\Streams\Addon\Module\Users\User\Contract\UserRepositoryInterface');

        return $repository->findByLoginAndPassword($credentials['login'], $credentials['password']);
    }

}
 