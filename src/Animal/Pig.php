<?php

declare(strict_types=1);

namespace Farm\Animal;

/**
 * @package Farm\Animal
 * @author  Simmarker
 *
 * Class Pig
 */
class Pig extends Animal
{
    protected const ANIMAL_NAME    = "Свинка";
    protected const ANIMAL_PRODUCT = "Свиное мяско";

    function getProductCount(): int
    {
        return rand(1, 3);
    }
}