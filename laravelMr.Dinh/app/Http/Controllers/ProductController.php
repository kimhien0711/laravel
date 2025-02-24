<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";
    public function index(){
        $response = Http::get($this->apiUrl);
        $products = $response->json();
        return view('products.index', compact('products'));
    }

    // Hiển thị form tạo sản phẩm
    public function create(){
        return view('products.create');
    }

    // Lưu sản phẩm mới
    public function store(StoreProductRequest $request){
        $validatedData = $request->validated();
        $validatedData['createdAt'] = now()-> toIso8601String();
        
        $response = Http::post($this->apiUrl, $request->validated());
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo!');
        }
    }
    // Hiển thị form chỉnh sửa sản phẩm
    public function edit($id){
        $response = Http::get("$this->apiUrl/$id");
        if ($response->successful()) {
            $product = $response->json();
            return view('products.edit', compact('product'));
        }
        return redirect()->route('products.index')->withErrors(['message' => 'Không tìm thấy sản phẩm']);
    }

    // Cập nhật sản phẩm
    public function update(StoreProductRequest $request, $id){
        $response = Http::put("$this->apiUrl/$id", $request->validated());
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
        }
        return back()->withErrors(['message' => 'Lỗi khi cập nhật sản phẩm']);
    }

    // Xóa sản phẩm
    public function destroy($id){
        $response = Http::delete("$this->apiUrl/$id");
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa!');
        }
        return back()->withErrors(['message' => 'Lỗi khi xóa sản phẩm']);
    }
}
