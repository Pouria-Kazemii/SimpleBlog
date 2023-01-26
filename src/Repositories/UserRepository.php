<?php

namespace Src\Repositories;


class UserRepository {

    private const FILE_ADDRESS = './src/Database/users.json';


    public function get($isArray = false){
        return json_decode(file_get_contents(self::FILE_ADDRESS), $isArray);
    }

    public function add(array $user){
        
        if(!file_exists(self::FILE_ADDRESS)){
            file_put_contents(self::FILE_ADDRESS, '');
        }

        $users = $this->get();

        $users[] = $user;

        file_put_contents(
            self::FILE_ADDRESS, 
            json_encode($users, JSON_PRETTY_PRINT)
        );

    }

    public function findByEmail(string $email){
        $users = $this->get(true);

        return array_filter($users, function($item) use ($email){
            return $item['email'] == $email;
        })[0];
    }

}