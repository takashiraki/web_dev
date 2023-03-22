<?php

class Fullname {
    private $first_name;
    private $family_name;

    const MAXLENGTH = 50;

    public function __construct(string $first_name_obj, string $family_name_obj)
    {

        $name_length = mb_strlen($family_name_obj) + mb_strlen($first_name_obj);

        if(self::MAXLENGTH < $name_length){
            throw new Exception('Max name length is 50.');
        }

        $this->first_name = $first_name_obj;
        $this->family_name = $family_name_obj;
    }

    public function get_family_name() {
        return $this->family_name;
    }

    public function get_first_name(){
        return $this->first_name;
    }
}

$fullname1 = new Fullname('taro','tanaka');

$family_name1 = $fullname1->get_family_name();

$fullname2 = new Fullname('john','smith');

$family_name2 = $fullname2->get_family_name();

// takana
var_dump($family_name1);

// smith
var_dump($family_name2);