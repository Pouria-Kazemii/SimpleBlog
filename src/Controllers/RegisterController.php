<?php

namespace Src\Controllers;

use Src\Repositories\MySqlUserRepository;
use Src\Repositories\UserRepository;

class RegisterController {


    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new MySqlUserRepository;
        
    }

    public function create(){
        
        if(authCheck()){
            return redirect('posts', 'list');
        }

        return view('register/create');
    }

    public function store(){
        $user = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        );

        $this->userRepository->add($user);

        //redirect
        return redirect('login', 'create');
    }


}