<?php

namespace Src\Controllers;

use Src\Repositories\PostRepository;

class PostsController {

    private PostRepository $postRepository;
    
    public function __construct()
    {
        $this->postRepository = new PostRepository;
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

        $newPostData = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'content' => $_POST['content']
        );

        $this->postRepository->add($newPostData);

        return redirect('posts', 'list');
    }

    public function show($index){
        $post = $this->postRepository->find($index);

        return view('posts/show', compact('post'));
    }

}