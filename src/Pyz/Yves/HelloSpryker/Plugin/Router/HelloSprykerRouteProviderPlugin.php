<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\HelloSpryker\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloSprykerRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    /**
     * @var string
     */
    protected const ROUTE_HELLO_SPRYKER_INDEX = 'hello-spryker-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     * @api
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        return $this->addHelloSprykerIndexRoute($routeCollection);
    }

    /**
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     */
    protected function addHelloSprykerIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/hello-spryker', 'HelloSpryker', 'Index', 'indexAction');
        $routeCollection->add(static::ROUTE_HELLO_SPRYKER_INDEX, $route);

        return $routeCollection;
    }
}
