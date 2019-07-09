<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\AuthRestApi;

use Spryker\Glue\AuthRestApi\AuthRestApiDependencyProvider as SprykerAuthRestApiDependencyProvider;
use Spryker\Glue\CartsRestApi\Plugin\AuthRestApi\TransformGuestCartToRegularCartPostAuthPlugin;
use Spryker\Glue\CompanyUserAuthRestApi\Plugin\AuthRestApi\CompanyUserRestUserMapperPlugin;

/**
 * @method \Spryker\Glue\AuthRestApi\AuthRestApiConfig getConfig()
 */
class AuthRestApiDependencyProvider extends SprykerAuthRestApiDependencyProvider
{
    /**
     * @return \Spryker\Glue\AuthRestApiExtension\Dependency\Plugin\RestUserMapperPluginInterface[]
     */
    protected function getRestUserExpanderPlugins(): array
    {
        return [
            new CompanyUserRestUserMapperPlugin(),
        ];
    }

    /**
     * @return \Spryker\Glue\AuthRestApiExtension\Dependency\Plugin\PostAuthPluginInterface[]
     */
    protected function getPostAuthPlugins(): array
    {
        return [
            new TransformGuestCartToRegularCartPostAuthPlugin(),
        ];
    }
}
