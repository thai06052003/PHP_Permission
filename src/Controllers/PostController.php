<?php
namespace App\Controllers;

use Error;
use ErrorException;
use App\Models\Post;

class PostController {
    public $postModel;
    public function __construct() {
        $this->postModel = new Post();
    }
    //
    public function index () {
        $pageTitle =  'Quản lý bài viết';
        $posts = $this->postModel->getPosts();
        return view('posts.index', compact('pageTitle', 'posts'));
    }
    public function add() {
        $pageTitle = 'Thêm bài viết';
        return view('posts.add', compact('pageTitle'));
    }
    //
    public function handleAdd() {
        $data = input()->all();
        $this->postModel->addPost($data);
        return redirect('/posts');
    }
    //
    public function update($id) {
        $pageTitle = 'Cập nhật bài viết';
        $post = $this->postModel->findPost($id);
        if(!$post) {
            $error =  new Error('User not found', 404);
            throw $error;
            var_dump($error);
        }
        return view('posts.edit', compact('pageTitle', 'post'));
    }
    //
    public function handleUpdate($id) {
        $data =  input()->all();

        $this->postModel->updatePost($id,$data);
        return redirect('/posts');
    }
    //
    public function delete($id) {
        $this->postModel->deletePost($id);
        return redirect('/posts');
    }
}