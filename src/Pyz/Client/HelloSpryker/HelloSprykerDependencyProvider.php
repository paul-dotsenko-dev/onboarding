<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;
use Spryker\Service\Container\Exception\FrozenServiceException;

class HelloSprykerDependencyProvider extends AbstractDependencyProvider
{
    /**
     * @var string
     */
    const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    /**
     * @param Container $container
     *
     * @return Container
     * @throws FrozenServiceException
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        return $this->addZedRequestClient($container);
    }

    /**
     * @param Container $container
     *
     * @return Container
     * @throws FrozenServiceException
     */
    protected function addZedRequestClient(Container $container): Container
    {
        $container->set(static::CLIENT_ZED_REQUEST, function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        });

        return $container;
    }
}
