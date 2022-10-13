<?php

declare(strict_types=1);

namespace Farm\Animal;

/**
 * @author Simmarker
 *
 * Class Cow
 */
class Cow extends Animal
{
    protected const ANIMAL_NAME    = "Корова";
    protected const ANIMAL_PRODUCT = "Молоко";

    function getProductCount(): int
    {
        return rand(8, 12);
    }
}