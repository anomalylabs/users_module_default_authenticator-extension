<?php namespace Anomaly\DefaultAuthenticatorExtension\Command;

use Anomaly\UsersModule\User\Contract\UserRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class AuthenticateCredentials
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DefaultAuthenticatorExtension\Command
 */
class AuthenticateCredentials implements SelfHandling
{

    /**
     * The credentials to authenticate.
     *
     * @var array
     */
    protected $credentials;

    /**
     * Create a new AuthenticateCredentials instance.
     *
     * @param array $credentials
     */
    public function __construct(array $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Handle the command.
     *
     * @param UserRepositoryInterface $users
     * @return \Anomaly\UsersModule\User\Contract\UserInterface|null
     */
    public function handle(UserRepositoryInterface $users)
    {
        if (!isset($this->credentials['email'])) {
            return null;
        }

        if (!isset($this->credentials['password'])) {
            return null;
        }

        return $users->findByCredentials($this->credentials);
    }
}
