<?php

namespace Src\Controllers;

use Src\Http\Request\Forms\CreatePostRequest;
use Src\Http\Request\Validator;
use Src\Repositories\MySqlPostRepository;


class PostsController {

    private MySqlPostRepository $postRepository;
    private Validator $validator;

    public function __construct()
    {
        $this->postRepository = new MySqlPostRepository();
        $this->validator = new Validator();
    }

    public function list(){
        $posts = $this->postRepository->get();

        return view('posts/list', compact('posts'));
    }

    public function create(){
        if(!authCheck()){
            return redirect('posts', 'list');
        }
        return view('posts/create');
    }

    public function store(){

        $isValid = $this->validator->make(CreatePostRequest::class);

        if(!$isValid){
            return redirect('/posts/create');
        }

        $newPostData = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'content' => $_POST['content']
        );
        
        $this->postRepository->add($newPostData);

        return redirect('/posts');
    }

    public function show($index){
        $post = $this->postRepository->find($index);
        
        return view('posts/show', compact('post'));
    }

}