<?php

class client_id extends string_value_object
{
    /**
     *
     * @var int
     */
    private $client_id;

    public function __construct(int $client_id)
    {
        if (mb_strlen($client_id) !== '16') {
            new Exception('Client id is not 16 characters.');
        }

        parent::__construct($client_id);

        $this->client_id = $client_id;
    }
}
