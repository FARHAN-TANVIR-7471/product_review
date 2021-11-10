<?php

namespace App\Http\Controllers;

use App\Services\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductServices $ProductService)
    {
        $this->productService = $ProductService;
    }
    public function index()
    {
        $products = $this->productService->index();
        return view('index',compact('products'));
    }

    public function formGet()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $product = $this->productService->create($request);
        return back();
    }

    public function show($id)
    {
        $product = $this->productService->show($id);
       // dd($product->toArray());
        return view('show',compact('product'));
    }

    public function update(Request $request)
    {
        $product = $this->productService->update($request);
        return back();
    }

    public function destroy($id)
    {
        $product = $this->ProductService->destroy($id);
        return back();
    }
}
