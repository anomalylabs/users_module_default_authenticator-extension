<?php

namespace Anomaly\DefaultAuthenticatorExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

/**
 * Class DefaultAuthenticatorExtension
 *
 * Authenticator extensions should return a handler class
 * to do their dirty work.
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DefaultAuthenticatorExtensionServiceProvider extends AddonServiceProvider implements DeferrableProvider
{

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [DefaultAuthenticatorExtension::class, 'anomaly.extension.default_authenticator'];
    }
}
