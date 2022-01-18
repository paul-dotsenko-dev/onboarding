<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Business\Reader;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface;

class StringReader implements StringReaderInterface
{
    /**
     * @var HelloSprykerRepositoryInterface
     */
    protected HelloSprykerRepositoryInterface $helloSprykerRepository;

    /**
     * @param HelloSprykerRepositoryInterface $helloSprykerRepository
     */
    public function __construct(HelloSprykerRepositoryInterface $helloSprykerRepository)
    {
        $this->helloSprykerRepository = $helloSprykerRepository;
    }

    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $helloSprykerTransfer = $this->helloSprykerRepository
            ->findPyzHelloSprykerById($helloSprykerTransfer->getIdHelloSpryker());

        if (!$helloSprykerTransfer) {
            return new HelloSprykerTransfer();
        }

        return $helloSprykerTransfer;
    }
}
