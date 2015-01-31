<?php namespace Anomaly\DefaultAuthenticatorExtension\Command\Handler;

use Anomaly\DefaultAuthenticatorExtension\Command\FindUserByCredentials;
use Anomaly\UsersModule\User\Contract\UserRepositoryInterface;

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
     * @var UserRepositoryInterface
     */
    protected $users;

    /**
     * Create a new FindUserByCredentialsHandler instance.
     *
     * @param UserRepositoryInterface $users
     */
    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }

    /**
     * Handle the command.
     *
     * @param FindUserByCredentials $command
     */
    public function handle(FindUserByCredentials $command)
    {
        return $this->users->findByCredentials($command->getCredentials());
    }
}
