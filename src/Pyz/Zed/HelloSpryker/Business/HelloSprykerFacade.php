<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method HelloSprykerBusinessFactory getFactory()
 */
class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloSprykerTransfer);
    }

    /**
     * @inheritDoc
     *
     * @api
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createStringWriter()
            ->createHelloSprykerEntity($helloSprykerTransfer);
    }

    /**
     * @inheritDoc
     *
     * @api
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
            return $this->getFactory()
                ->createStringReader()
                ->findHelloSpryker($helloSprykerTransfer);
    }
}
