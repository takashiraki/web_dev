<?php

class User{
    private $user_id;

    private $user_name;

    private $user_full_name;

    public function __construct(string $user_id_obj,string $user_name_obj,string $user_full_name_obj)
    {
        $this->user_id = $user_id_obj;
        $this->user_name = $user_name_obj;
        $this->user_full_name = $user_full_name_obj;
    }

    public function User(string $user_name_obj,$user_full_name_obj)
    {
        $this->user_id = new User_id();
    }
}

class User_id{
    
}