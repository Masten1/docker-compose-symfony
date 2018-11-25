<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 19.11.18
 * Time: 21:21
 */

namespace App\Services;

use App\Interfaces\IdentityObject;
use App\Traits\IdentityTrait;
use App\Traits\PriceUtilities;


class ShopProduct implements IdentityObject
{
    use IdentityTrait, PriceUtilities;

    public function storeIdentityObject(IdentityObject $identityObject)
    {
        if ($identityObject instanceof IdentityObject) {
            var_dump(111);
        }

        if ($identityObject instanceof ShopProduct) {
            var_dump(2222);
        }

        die();
        var_dump($identityObject);
    }
}