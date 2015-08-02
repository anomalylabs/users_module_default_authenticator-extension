<?php namespace Anomaly\DefaultAuthenticatorExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

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
class DefaultAuthenticatorExtension extends Extension
{

    /**
     * This extensions provides the default
     * authenticator for the users module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.users::authenticator.default';

}
