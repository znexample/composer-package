<?php

namespace PhpLab\Sandbox\Example\Domain\ValueObjects;

class MoneyValueObject
{

    private $currency;
    private $sum;

    public function __construct(string $currency, float $sum)
    {
        $this->currency = $currency;
        $this->sum = $sum;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function __toString(): string
    {
        return $this->sum . ' ' . $this->currency;
    }
}
