<?php namespace Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class UsersModuleDefaultAuthenticatorExtension
 *
 * Authenticator extensions should return a handler class
 * to do their dirty work.
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator
 */
class UsersModuleDefaultAuthenticatorExtension extends Extension
{

    /**
     * Authenticate a set of credentials.
     *
     * @param array $credentials
     * @return mixed
     */
    public function authenticate(array $credentials)
    {
        $user = app('Anomaly\Streams\Addon\Module\Users\User\Contract\UserRepositoryInterface');

        return $user->findByCredentials($credentials);
    }
}
 