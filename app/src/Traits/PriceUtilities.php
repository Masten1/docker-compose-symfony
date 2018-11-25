<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 19.11.18
 * Time: 22:47
 */

namespace App\Traits;


trait PriceUtilities
{
    private $textRate = 17;

    function calculateTax($price)
    {
        return (($this->textRate / 100) * $price);
    }
}