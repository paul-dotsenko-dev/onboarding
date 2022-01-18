<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function reverseStringAction(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFacade()->reverseString($helloSprykerTransfer);
    }
}
