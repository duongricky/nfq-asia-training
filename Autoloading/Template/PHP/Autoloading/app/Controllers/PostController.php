<?php

namespace App\Controllers;

use App\Entities\Post;

class PostController
{
    public function store()
    {
        return Post::create([
            'title' => 'Blah blah',
            'content' => 'Bloh, bloh'
        ]);
    }
}