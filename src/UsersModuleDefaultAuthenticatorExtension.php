<?php namespace Anomaly\Streams\Addon\Extension\UsersModuleDefaultAuthenticator;

use Anomaly\Streams\Platform\Addon\Extension\ExtensionAddon;

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
class UsersModuleDefaultAuthenticatorExtension extends ExtensionAddon
{

    /**
     * Return the handler class.
     *
     * @return null|string
     */
    public function toHandler()
    {
        return $this->transform(__FUNCTION__);
    }
}
 