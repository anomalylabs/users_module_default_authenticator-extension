<?php namespace Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator;

use Anomaly\Streams\Addon\Module\Users\User\Contract\UserRepositoryInterface;

/**
 * Class UsersModuleDefaultAuthenticatorExtensionHandler
 *
 * This class handles the authenticate logic for it's extension.
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator
 */
class UsersModuleDefaultAuthenticatorExtensionHandler
{

    /**
     * Authenticate the credentials.
     *
     * @param array $credentials
     * @return mixed
     */
    public function authenticate(UserRepositoryInterface $users, array $credentials)
    {
        return $users->findUserByLoginAndPassword($credentials['login'], $credentials['password']);
    }
}
 