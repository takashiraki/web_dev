<?php

class client_tel
{
    /**
     *
     * @var int
     */
    private $client_tel;

    public function __construct(int $client_tel)
    {
        if (mb_strlen($client_tel) !== '10' || mb_strlen($client_tel) !== '11') {
            new Exception('Client tel is not 10 or 11 characters.');
        }

        $this->client_tel = $client_tel;
    }
}
