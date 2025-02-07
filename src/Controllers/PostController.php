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
    // Hiển thị danh sách bài viết
    public function index () {
        $pageTitle =  'Quản lý bài viết';
        $posts = $this->postModel->getPosts();
        return view('posts.index', compact('pageTitle', 'posts'));
    }
    // Hiển thị giao diện thêm bài viết
    public function add() {
        $pageTitle = 'Thêm bài viết';
        return view('posts.add', compact('pageTitle'));
    }
    // Xử lý yêu cầu thêm bài viết
    public function handleAdd() {
        $data = input()->all();
        $this->postModel->addPost($data);
        return redirect('/posts');
    }
    // Hiển thị giao diện cập nhật bài viết
    public function edit($id) {
        $pageTitle = 'Cập nhật bài viết';
        $post = $this->postModel->findPost($id);
        if(!$post) {
            $error =  new Error('User not found', 404);
            throw $error;
        }
        return view('posts.edit', compact('pageTitle', 'post'));
    }
    // Xử lý yêu cầu chỉnh sửa bài viết
    public function handleEdit($id) {
        $data =  input()->all();

        $this->postModel->updatePost($id,$data);
        return redirect('/posts');
    }
    // Xử lý yêu cầu xóa bài viết
    public function delete($id) {
        $this->postModel->deletePost($id);
        return redirect('/posts');
    }
}