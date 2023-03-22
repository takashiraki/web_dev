<?php

use Fullname as GlobalFullname;

// interface Fullname
// {
//     public function set_full_name(FirstName $firstName, LastName $lastName): Fullname;

// }

class Fullname
{

    /**
     *
     * @var FirstName
     */
    private $first_name;

    /**
     *
     * @var FamilyName
     */
    private $family_name;

    public function __construct(FirstName $first_name_obj, FamilyName $family_name_obj)
    {
        $this->first_name = $first_name_obj;
        $this->family_name = $family_name_obj;
    }

    public function get_family_name()
    {
        return $this->family_name;
    }

    public function get_first_name()
    {
        return $this->first_name;
    }
}

class FamilyName
{

    /**
     * FamilyName
     *
     * @var string
     */
    private string $family_name;

    public function __construct(string $value)
    {
        $this->family_name = $value;
    }
}

class FirstName
{

    /**
     * FirstName
     *
     * @var string
     */
    private string $first_name;

    public function __construct(string $value)
    {
        $this->first_name = $value;
    }
}
