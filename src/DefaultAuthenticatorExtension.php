<?php namespace Anomaly\DefaultAuthenticatorExtension;

use Anomaly\DefaultAuthenticatorExtension\Command\FindUserByCredentials;
use Anomaly\UsersModule\User\Contract\UserInterface;
use Anomaly\UsersModule\User\UserAuthenticator;
use Illuminate\Foundation\Bus\DispatchesCommands;

/**
 * Class DefaultAuthenticatorExtension
 *
 * Authenticator extensions should return a handler class
 * to do their dirty work.
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator
 */
class DefaultAuthenticatorExtension extends UserAuthenticator
{

    use DispatchesCommands;

    /**
     * This extensions provides the default
     * authenticator for the users module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.users::authenticator.default';

    /**
     * Authenticate credentials.
     *
     * @param array $credentials
     * @return null|UserInterface
     */
    public function authenticate(array $credentials)
    {
        return $this->dispatch(new FindUserByCredentials($credentials));
    }
}
