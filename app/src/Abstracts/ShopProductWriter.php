<?php

namespace App\Abstracts;


use App\Services\ShopProduct;

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }
}