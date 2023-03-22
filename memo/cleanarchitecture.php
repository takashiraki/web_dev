<?php

declare(strict_types=1);

namespace Pakcages\Domain\User;

use InvalidArgumentException;

class User
{
    public function __construct(
        private string $userId,
        private string $name,
        private Email $email
    ) {
    }
}

// string $email

$email = 'mail';

// Email $email
$email = new Email('email');

class Email
{
    public function __construct(private string $value)
    {
        throw new InvalidArgumentException('');
    }
}

$email = new Email('email');

$user = new User('user_id', 'name', $email);

// function calcTax(float $amount, float $taxRate): float
// {
//     return $amount * (1 + $taxRate / 100);
// }

// calcTax(100.0, 10.0); // 110

// calcTax(10.0, 100.0);

class ExcludeTaxPrice
{
    private float $value;

    public function __construct(float $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('金額は0以上');
        }

        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}

class TaxRate
{
    public function __construct(private float $value)
    {
    }

    public function getValue(): float
    {
        return $this->value;
    }
}

class IncludeTaxPrice
{
    public function __construct(private float $value)
    {
    }

    public function getValue(): float
    {
        return $this->value;
    }
}

$excludeTaxPrice = new ExcludeTaxPrice(100.0);
$taxRate = new TaxRate(10.0);
$includeTaxPrice = calcTax($excludeTaxPrice, $taxRate);

function calcTax(ExcludeTaxPrice $excludeTaxPrice, TaxRate $taxRate): IncludeTaxPrice
{
    return new IncludeTaxPrice($excludeTaxPrice->getValue() * (1 + $taxRate->getValue() / 100));
}