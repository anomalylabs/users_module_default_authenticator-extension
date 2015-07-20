<?php namespace Anomaly\DefaultAuthenticatorExtension;

use Anomaly\UsersModule\User\Contract\UserInterface;
use Anomaly\UsersModule\User\Contract\UserRepositoryInterface;

/**
 * Class DefaultAuthenticatorHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DefaultAuthenticatorExtension
 */
class DefaultAuthenticatorHandler
{

    /**
     * The user repository.
     *
     * @var UserRepositoryInterface
     */
    protected $users;

    /**
     * Create a new DefaultAuthenticatorHandler instance.
     *
     * @param UserRepositoryInterface $users
     */
    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }

    /**
     * Handle the authentication.
     *
     * @param array $credentials
     * @return null|UserInterface
     */
    public function authenticate(array $credentials)
    {
        return $this->users->findByCredentials($credentials);
    }
}
