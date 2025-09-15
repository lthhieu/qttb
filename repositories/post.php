<?php
require_once 'models/testPost.php';

class PostRepository {
    public function getAll() {
        return Post::orderBy('createAt', 'desc')->get();
    }

    public function find($id) {
        return Post::find($id);
    }

    public function create($data) {
        return Post::create($data);
    }
}
