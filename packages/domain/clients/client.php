<?php

class Client
{
    /**
     * @var client_id
     */
    private $client_id;



    /**
     * @var client_name
     */
    private $client_name;



    /**
     * @var client_email
     */
    private $client_email;



    /**
     * @var client_tel
     */
    private $client_tel;



    /**
     * @var client_prefecture
     */
    private $client_prefecture;



    /**
     * Constructor
     *
     * @param client_id $client_id
     * @param client_name $client_name
     * @param client_email $client_email
     * @param client_tel $client_tel
     * @param client_prefecture $client_prefecture
     */
    public function __construct(
        client_id $client_id,
        client_name $client_name,
        client_email $client_email,
        client_tel $client_tel,
        client_prefecture $client_prefecture
    ) {
        $this->client_id = $client_id;
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->client_tel = $client_tel;
        $this->client_prefecture = $client_prefecture;
    }



    /**
     * Get client info
     *
     * @return array
     */
    public function get_client_info(): array
    {
        $client_info = [
            $this->client_id,
            $this->client_name,
            $this->client_email,
            $this->client_tel,
            $this->client_prefecture
        ];

        return $client_info;
    }



    /**
     * Get client id
     *
     * @return client_id
     */
    public function get_client_id(): client_id
    {
        return $this->client_id;
    }



    /**
     * Get client name
     *
     * @return client_name
     */
    public function get_client_name(): client_name
    {
        return $this->client_name;
    }



    /**
     * Get client email
     *
     * @return client_email
     */
    public function get_client_email(): client_email
    {
        return $this->client_email;
    }



    /**
     * Get client tel
     * 
     * @return client_tel
     */
    public function get_client_tel(): client_tel
    {
        return $this->client_tel;
    }



    /**
     * Get client prefecture
     * 
     * @return client_prefecture
     */
    public function get_client_prefecture(): client_prefecture
    {
        return $this->client_prefecture;
    }
}
