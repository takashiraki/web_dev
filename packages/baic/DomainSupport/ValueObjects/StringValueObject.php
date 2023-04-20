<?php

abstract class StringValueObject
{
    /**
     * @var string
     */
    private $value;

    protected function __construct(string $value)
    {
        if (!isset($value) || trim($value) === "") {
            throw new Exception("Need any value");
        }

        $this->value = $value;
    }
}
