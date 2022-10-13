<?php

declare(strict_types=1);

namespace Farm;

/**
 * @package Farm
 * @author  Simmarker
 *
 * Class Printer
 */
class Printer
{
    private Farmer $farmer;

    public function __construct(Farmer $farmer)
    {
        $this->farmer = $farmer;
    }

    function showAnimalsOnFarm()
    {
        echo "Всего животных на ферме: " . $this->farmer->getTotalCountAnimals() . "\n";
        echo "Количество животных на ферме: \n";
        foreach($this->farmer->getAnimalsCount() as $animal => $animalCount) {
            echo "\t$animal: $animalCount голов\n";
        }
    }

    function showProductsByDays(int $days = 1)
    {
        echo "Собираем продукты с фермы за неделю: \n";
        foreach($this->farmer->getProductByDayCount($days) as $product => $productCount) {
            echo "\t$product: $productCount ед.\n";
        }
    }
}