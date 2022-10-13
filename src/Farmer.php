<?php

declare(strict_types=1);

namespace Farm;

/**
 * @package Farm
 * @author  Simmarker
 *
 * Class Farmer
 */
class Farmer
{
    private Farm $farm;

    public function __construct(Farm $farm)
    {
        $this->farm = $farm;
    }

    public function getProductByDayCount(int $days = 1): array
    {
        $result = [];

        for($i = 0; $i < $days; $i++) {
            foreach($this->getProductByOneDay() as $productName => $productCount) {
                // Если продукт собирается впервые - добавим его в результат со значением 0
                // и после прибавим полученные продукты от животного
                if(!isset($result[$productName])) {
                    $result[$productName] = 0;
                }

                $result[$productName] += $productCount;
            }
        }

        return $result;
    }

    /**
     * Количество продуктов за 1 день
     *
     * @return array<string, int>
     */
    public function getProductByOneDay(): array
    {
        $result = [];

        foreach($this->farm->getBarn() as $animal) {
            // Если продукт собирается впервые - добавим его в результат со значением 0
            // и после прибавим полученные продукты от животного
            if(!isset($result[$animal->getProductName()])) {
                $result[$animal->getProductName()] = 0;
            }

            $result[$animal->getProductName()] += $animal->getProductCount();
        }

        return $result;
    }

    public function getAnimalsCount(): array
    {
        $result = [];

        foreach($this->farm->getBarn() as $animal) {
            // Если продукт собирается впервые - добавим его в результат со значением 0
            // и после прибавим полученные продукты от животного
            if(!isset($result[$animal->getName()])) {
                $result[$animal->getName()] = 0;
            }

            $result[$animal->getName()]++;
        }

        return $result;
    }

    public function getTotalCountAnimals(): int
    {
        return count($this->farm->getBarn());
    }
}