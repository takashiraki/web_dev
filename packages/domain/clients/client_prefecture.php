<?php

class client_prefecture extends string_value_object
{
    /**
     *
     * @var string
     */
    private $client_prefecturee;

    public function __construct(string $client_prefecture)
    {
        if (mb_strlen($client_prefecture) > '12') {
            new Exception('Client prefecture is more than 12 characters.');
        }

        parent::__construct($client_prefecture);

        $this->client_prefecturee = $client_prefecture;
    }
}
