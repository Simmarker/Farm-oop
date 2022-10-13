<?php

declare(strict_types=1);

namespace Farm;

use Farm\Animal\Animal;

/**
 * @author Simmarker
 *
 * Class Farm
 */
class Farm
{
    /**
     * @var Animal[]
     */
    private array $barn = [];

    public function addAnimal(Animal $animal): void
    {
        $this->barn[] = $animal;
    }

    /**
     * @return Animal[]
     */
    public function getBarn(): array
    {
        return $this->barn;
    }
}