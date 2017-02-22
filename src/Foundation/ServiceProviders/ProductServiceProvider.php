<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2017/2/22
 * Time: 22:34
 */

namespace Hanson\Youzan\Foundation\ServiceProviders;


use Hanson\Youzan\Product\Product;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ProductServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['product'] = function ($pimple) {
            return new Product($pimple['access_token']);
        };
    }
}