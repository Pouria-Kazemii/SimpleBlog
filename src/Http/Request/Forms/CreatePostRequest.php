<?php

namespace Src\Http\Request\Forms;


class  CreatePostRequest {

    public function rules(){

        return [
            'title' => ['required', 'unique:posts,title'],
            'description' => ['required'],
            'content' => ['required']
        ];
        
    }

    public function messages() {

    }

}