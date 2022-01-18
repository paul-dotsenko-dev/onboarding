<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacade getFacade()
 * @method \Pyz\Zed\HelloSpryker\Communication\HelloSprykerCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerQueryContainer getQueryContainer()
 */
class IndexController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request): array
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString("Hello Spryker!");

        $helloSprykerTransfer = $this->getFacade()->reverseString($helloSprykerTransfer);

        return ['string' => $helloSprykerTransfer->getReversedString()];
    }
}
