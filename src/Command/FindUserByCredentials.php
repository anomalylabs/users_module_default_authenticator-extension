<?php namespace Anomaly\DefaultAuthenticatorExtension\Command;

/**
 * Class FindUserByCredentials
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DefaultAuthenticatorExtension\Command
 */
class FindUserByCredentials
{

    /**
     * The credentials to test.
     *
     * @var array
     */
    protected $credentials;

    /**
     * Create a new FindUserByCredentials instance.
     *
     * @param array $credentials
     */
    public function __construct(array $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Get the credentials.
     *
     * @return array
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}
