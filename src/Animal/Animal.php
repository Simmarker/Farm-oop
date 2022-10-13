<?php

declare(strict_types=1);

namespace Farm\Animal;

/**
 * @author Simmarker
 *
 * Class Animal
 */
abstract class Animal
{
    protected const ANIMAL_NAME    = "";
    protected const ANIMAL_PRODUCT = "";

    /**
     * Глобальный идентификатор животных
     */
    public static int $animalId = 0;

    /**
     * @var int
     */
    protected int $id;

    public function __construct()
    {
        $this->id = self::$animalId++;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return static::ANIMAL_NAME;
    }

    public function getProductName(): string
    {
        return static::ANIMAL_PRODUCT;
    }

    abstract function getProductCount(): int;
}