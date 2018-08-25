<?php

namespace App\Product;

final class Category
{
    private $id;
    private $name;
    private $daysBeforeWarningAboutExpiration;

    public static function fromId(int $id): self
    {
        switch ($id) {
            case 0:
                return new self(0, 'Category not specified', 0);
            case 1:
                return new self(1, 'Beverages', 30);
            case 2:
                return new self(2, 'Bread / Bakery', 1);
            case 3:
                return new self(3, 'Canned / Jarred', 30);
            case 4:
                return new self(4, 'Dairy', 2);
            case 5:
                return new self(5, 'Dry / Baking', 30);
            case 6:
                return new self(6, 'Frozen', 60);
            case 7:
                return new self(7, 'Meat', 2);
            case 8:
                return new self(8, 'Produce', 30);
            case 9:
                return new self(9, 'Cleaners', 60);
            case 10:
                return new self(10, 'Paper Goods', 60);
            case 11:
                return new self(11, 'Personal Care', 60);
            case 12:
                return new self(12, 'Other', 60);
        }

        throw new \Exception(sprintf('Unknown product category %u', $id));
    }

    private function __construct(int $id, string $name, int $daysBeforeWarningAboutExpiration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->daysBeforeWarningAboutExpiration = $daysBeforeWarningAboutExpiration;
    }

    public function id() : int
    {
        return $this->id;
    }

    public function name() : string
    {
        return $this->name;
    }

    public function daysBeforeWarningAboutExpiration(): int
    {
        return $this->daysBeforeWarningAboutExpiration;
    }
}
