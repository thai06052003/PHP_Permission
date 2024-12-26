<?php
namespace App\Controllers;
class HomeController {
    public function index() {
        $pageTitle = 'Trang tổng quan';
        $title = "Hoc phan quyen";
        $status = true;
        return view('home', compact('title', 'status', 'pageTitle'));
    }
}