<?php
namespace App\Controllers;

use Error;
use ErrorException;
use App\Models\Product;

class ProductController {
    public $productModel;
    public function __construct() {
        $this->productModel = new Product();
    }
    // Lấy ra danh sách sản phẩm
    public function index () {
        $pageTitle =  'Quản lý sản phẩm';
        $products = $this->productModel->getProducts();
        return view('products.index', compact('pageTitle', 'products'));
    }
    // Hiển thị giao diện thêm sản phẩm
    public function add() {
        $pageTitle = 'Thêm sản phẩm';
        return view('products.add', compact('pageTitle'));
    }
    // Xử lý yêu cầu thêm sản phẩm
    public function handleAdd() {
        $data = input()->all();
        $this->productModel->addProduct($data);
        return redirect('/products');
    }
    // Hiển thị giao diện chỉnh sửa sản phẩm
    public function edit($id) {
        $pageTitle = 'Cập nhật sản phẩm';
        $product = $this->productModel->findProduct($id);
        if(!$product) {
            throw new Error('Product not found');
        }
        return view('products.edit', compact('pageTitle', 'product'));
    }
    // Xử lý yêu cầu chỉnh sửa sản phẩm
    public function handleEdit($id) {
        $data =  input()->all();

        $this->productModel->updateProduct($id,$data);
        return redirect('/products');
    }
    // Xử lý yêu cầu xóa sản phẩm
    public function delete($id) {
        $this->productModel->deleteProduct($id);
        return redirect('/products');
    }
}