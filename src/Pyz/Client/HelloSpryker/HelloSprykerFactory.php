<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStub;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerFactory extends AbstractFactory
{
    /**
     * @return HelloSprykerZedStubInterface
     * @throws ContainerKeyNotFoundException
     */
    public function createHelloSprykerZedStub()
    {
        return new HelloSprykerZedStub($this->getZedRequestClient());
    }

    /**
     * @return ZedRequestClientInterface
     * @throws ContainerKeyNotFoundException
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }

}
