<?php

namespace Src\Controllers;

use Src\Repositories\MySqlUserRepository;
use Src\Repositories\UserRepository;

class LoginController {

    private $userRepository;

    public function __construct(){
        $this->userRepository = new MySqlUserRepository;
    }

    public function create(){

        if(authCheck()){
            return redirect('/posts');
        }

        return view('login/create');
    }

    public function store(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        $user = $this->userRepository->findByEmail($email);

        if(empty($user)){
            return redirect('/register');
        }
        
        if($user->password != $password){
            return redirect('/login');
        }

        login($user);
        
        return redirect('/posts');
    }


    public function destroy(){
        logout();

        return redirect('/');
    }

}