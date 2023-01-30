<?php

class User{
    private user_id $user_id;

    private user_name $user_name;

    public function __construct(User_id $user_id_obj,user_name $user_name_obj)
    {
        $this->user_id = $user_id_obj;
        $this->user_name = $user_name_obj;
    }
}

class User_id extends string_value_object{

    const LENGTH = 6;

    public function __construct(string $value)
    {
        $value_length = mb_strlen($value);

        if($value_length !== self::LENGTH){
            throw new Exception('Userid must be 10 characters');
        }

        parent::__construct($value);
    }
}

class user_name extends string_value_object{

    const MIN_LENGTH = 0;

    const MAX_LENGTH = 20;

    public function __construct(string $value)
    {
        $value_length = mb_strlen($value);

        if($value_length < self::MIN_LENGTH || self::MAX_LENGTH < $value_length){
            throw new Exception('User name must be betwnn 0 and 20 characters.');
        }

        parent::__construct($value);
    }
}

abstract class string_value_object{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}

$test_1 = new User_id("test_1");
$test_2 = new user_name("takashi shirakihara");
$test_3 = new User($test_1,$test_2);

echo '<pre>';
var_dump($test_1,$test_2,$test_3);
echo '</pre>';