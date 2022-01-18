<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\HelloSprykerConfig getConfig()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerQueryContainer getQueryContainer()
 */
class HelloSprykerPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return PyzHelloSprykerQuery
     */
    public function createHelloSprykerQuery(): PyzHelloSprykerQuery
    {
        return PyzHelloSprykerQuery::create();
    }
}
