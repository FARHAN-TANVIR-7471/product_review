<?php

namespace App\Repositories;
use App\Repositories\Repository;
use App\Models\Product;

class ProductRepository //extends Repository
{
    public function index()
    {
        $product = Product::get();
        return $product;    
    }

    public function create($product)
    {
        $product = Product::create($product);
        return $product;
    }

    public function show($id)
    {
        $product = Product::where('id',$id)->with('review')->firstOrFail();
        return $product;
    }

    public function update($request, $id)
    {
        $product = $this->productRepository->update($request);
        return $product;
    }

    public function destroy($id)
    {
        $product = $this->productRepository->destroy($id);
        return $product;
    }
}