<?php

namespace Src\Controllers;

use Src\Repositories\UserRepository;

class LoginController {

    private $userRepository;

    public function __construct(){
        $this->userRepository = new UserRepository;
    }

    public function create(){

        if(authCheck()){
            return redirect('posts', 'list');
        }

        return view('login/create');
    }

    public function store(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        $user = $this->userRepository->findByEmail($email);

        if($user['password'] != $password){
            return redirect('login', 'create');
        }

        login($user);
        
        return redirect('posts', 'list');
    }


    public function destroy(){
        logout();

        return redirect('home', 'list');
    }

}