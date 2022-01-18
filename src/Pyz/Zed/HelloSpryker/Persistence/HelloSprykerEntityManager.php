<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Orm\Zed\HelloSpryker\Persistence\PyzHelloSpryker;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

class HelloSprykerEntityManager extends AbstractEntityManager implements HelloSprykerEntityManagerInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function saveHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $helloSprykerEntity = new PyzHelloSpryker();
        $helloSprykerEntity->fromArray($helloSprykerTransfer->modifiedToArray());
        $helloSprykerEntity->save();

        $helloSprykerTransfer->fromArray($helloSprykerEntity->toArray(), true);

        return $helloSprykerTransfer;
    }
}
