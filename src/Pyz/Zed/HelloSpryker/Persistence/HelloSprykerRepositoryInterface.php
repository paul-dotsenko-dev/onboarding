<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerRepositoryInterface
{
    /**
     * @param int $idHelloSpryker
     *
     * @return HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer;
}
