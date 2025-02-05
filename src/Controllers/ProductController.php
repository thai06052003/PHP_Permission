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
    //
    public function index () {
        $pageTitle =  'Quản lý sản phẩm';
        $products = $this->productModel->getProducts();
        return view('products.index', compact('pageTitle', 'products'));
    }
    public function add() {
        $pageTitle = 'Thêm sản phẩm';
        return view('products.add', compact('pageTitle'));
    }
    //
    public function handleAdd() {
        $data = input()->all();
        $this->productModel->addProduct($data);
        return redirect('/products');
    }
    //
    public function update($id) {
        $pageTitle = 'Cập nhật sản phẩm';
        $product = $this->productModel->findProduct($id);
        if(!$product) {
            throw new Error('Product not found');
        }
        return view('products.edit', compact('pageTitle', 'product'));
    }
    //
    public function handleUpdate($id) {
        $data =  input()->all();

        $this->productModel->updateProduct($id,$data);
        return redirect('/products');
    }
    //
    public function delete($id) {
        $this->productModel->deleteProduct($id);
        return redirect('/products');
    }
}