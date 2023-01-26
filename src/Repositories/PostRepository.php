<?php 

namespace Src\Repositories;


class PostRepository {

    private const FILE_ADDRESS = './src/Database/posts.json';

    public function get($isArray = false) {
        return json_decode(
            file_get_contents(self::FILE_ADDRESS), $isArray
        );
    }

    public function add(array $post){

        if(!file_exists(self::FILE_ADDRESS)){

            file_put_contents(self::FILE_ADDRESS, '');

        }


        $posts = $this->get(true);

        $posts[] = $post;

        $data = json_encode($posts, JSON_PRETTY_PRINT);

        file_put_contents(self::FILE_ADDRESS, $data);
    }

    public function find($index){
        $posts = $this->get();

        return $posts[$index];
    }

}