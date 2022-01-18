<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method HelloSprykerFactory getFactory()
 */
class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @api
     *
     * @return HelloSprykerTransfer
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     *
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createHelloSprykerZedStub()
            ->reverseString($helloSprykerTransfer);
    }
}
