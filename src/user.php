<?php

class user {
    public $login;
    public $password;
    public $name;
    public $age;
    public $role;

    public function __construct($user) {
        $this->login = $user->{'login'};
        $this->password = $user->{'password'};
        $this->name = $user->{'name'};
        $this->age = $user->{'age'};
        $this->role = $user->{'role'};
    }


    public static function getUsers(){
        $users_list = array();
        foreach (glob("users/*.txt") as $filename) {
            $file = file_get_contents($filename, FILE_USE_INCLUDE_PATH);
            if($file == True){
                $json_decoding_file = json_decode($file);
                $users_list[$json_decoding_file->{'login'}] = $json_decoding_file;
            }
        }
        return $users_list;
    }
}