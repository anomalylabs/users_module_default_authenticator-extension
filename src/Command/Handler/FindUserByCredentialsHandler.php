<?php namespace Anomaly\DefaultAuthenticatorExtension\Command\Handler;

use Anomaly\DefaultAuthenticatorExtension\Command\FindUserByCredentials;
use Anomaly\UsersModule\User\Contract\User;
use Anomaly\UsersModule\User\Contract\UserRepository;

/**
 * Class FindUserByCredentialsHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DefaultAuthenticatorExtension\Command\Handler
 */
class FindUserByCredentialsHandler
{

    /**
     * The user repository.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new FindUserByCredentialsHandler instance.
     *
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Handle the command.
     *
     * @param FindUserByCredentials $command
     * @return null|User
     */
    public function handle(FindUserByCredentials $command)
    {
        return $this->users->findByCredentials($command->getCredentials());
    }
}
