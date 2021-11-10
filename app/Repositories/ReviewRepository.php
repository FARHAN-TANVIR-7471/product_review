<?php

namespace App\Repositories;
use App\Repositories\Repository;
use App\Models\Review;

class ReviewRepository
{
    public function index()
    {
        $product = Review::get();
        return $product;    
    }

    public function create($review)
    {
        $product = Review::create($review);
        return $product;
    }

    public function show($id)
    {
        $product = Review::where('id',$id)->firstOrFail();
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