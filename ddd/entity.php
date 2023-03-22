<?php

class User{

    /**
     * @var UserName
     */
    private $username;

    /**
     * @var UserId
     */
    private $userid;

    public function __construct(UserName $user_name, UserId $user_id)
    {
        $this->username = $user_name;
        $this->userid = $user_id;
    }

    public function get_name_from_db(UserName $user_name, UserId $user_id)
    {
        exit();
    }

    public function chage_name(UserName $new_name)
    {
        if(empty($new_name)){
            throw new Exception('You need new name');
        }

        $this->username = $new_name;
    }

    public function Equals_name(UserName $comparison_name_obj)
    {
        if($this->username !== $comparison_name_obj){
            return false;
        }

        return true;
    }

    public function Equals_id(UserId $comparison_id_obj)
    {
        if($this->userid !== $comparison_id_obj){
            return false;
        }

        return true;
    }

    public function is_duplicated(Username $user_name)
    {
        // DBから名前を引っ張る
        $get_name = '';

        if($user_name === $get_name){
            // 名前が重複していた場合、false
            return false;
        }

        return true;
    }
}

class UserName{
    
    /**
     * @var string
     */
     private $username;
    
    public function __construct(string $user_name)
    {
        if(empty($user_name)){
            throw new Exception('you need user name');
        }

        $this->username = $user_name;
    }
}

class UserId{

    /**
     * @var string
     */
    private $userId;

    public function __construct(string $value)
    {
        if(empty($value)){
            throw new Exception('You need ID');
        }

        $this->userId = $value;
    }
}