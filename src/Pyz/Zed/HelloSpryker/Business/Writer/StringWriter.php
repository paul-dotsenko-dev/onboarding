<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Business\Writer;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface;

class StringWriter implements StringWriterInterface
{
    /**
     * @var HelloSprykerEntityManagerInterface
     */
    protected HelloSprykerEntityManagerInterface $helloSprykerEntityManager;

    /**
     * @param HelloSprykerEntityManagerInterface $helloSprykerEntityManager
     */
    public function __construct(HelloSprykerEntityManagerInterface $helloSprykerEntityManager)
    {
        $this->helloSprykerEntityManager = $helloSprykerEntityManager;
    }

    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->helloSprykerEntityManager->saveHelloSprykerEntity($helloSprykerTransfer);
    }
}
