<?php

declare(strict_types=1);

namespace Farm\Animal;

/**
 * @author Simmarker
 *
 * Class Chicken
 */
class Chicken extends Animal
{
    protected const ANIMAL_NAME    = "Курица";
    protected const ANIMAL_PRODUCT = "Яйца";

    function getProductCount(): int
    {
        return rand(3, 8);
    }
}