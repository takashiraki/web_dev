<?php

class client_name extends string_value_object
{
    /**
     *
     * @var string
     */
    private $client_name;

    public function __construct(string $client_name)
    {
        if (mb_strlen($client_name) > '30') {
            new Exception('Client name is more than 30 characters.');
        }

        parent::__construct($client_name);

        $this->client_name = $client_name;
    }
}
