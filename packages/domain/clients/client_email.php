<?php

class client_email extends string_value_object
{
    /**
     * @var string
     */
    private $client_email;


    /**
     * Minimum length of email characters
     */
    const MIN_LENGTH = 6;



    /**
     * Maximum length of email characters
     */
    const MAX_LENGTH = 60;



    public function __construct(string $client_email)
    {
        if (mb_strlen($client_email) > self::MAX_LENGTH) {
            new Exception('Client name is more than 60 characters.');
        }

        if (mb_strlen($client_email) < self::MIN_LENGTH) {
            new Exception('Client name is less than 6 characters.');
        }

        if (!filter_var($client_email, FILTER_VALIDATE_EMAIL)) {
            new Exception('This email is not corect.');
        }

        parent::__construct($client_email);

        $this->client_email = $client_email;
    }
}
