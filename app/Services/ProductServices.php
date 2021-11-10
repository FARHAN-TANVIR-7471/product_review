<?php

namespace App\Services;

use App\Repositories\Categories\CategorieRepositoryEloquent;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Session;


class ProductServices
{
    protected $product = ['title', 'price', 'discount', 'description', 'image', 'status'];

    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $product = $this->productRepository->index();
        return $product;
    }

    public function create($request)
    {
        if (isset($request->image)) {
            $image_uplode = $this->uplodeImage($request);
        }else{
            $image_uplode = null;
        }

        $product = [
            'title'         => $request->title,
            'price'         => $request->price,
            'discount'      => $request->discount,
            'description'   => $request->description,
            'image'         => $image_uplode,
            'status'        => $request->status
        ];

        Session::flash('message', 'Successful create'); 
        Session::flash('alert-class', 'alert-success'); 

        $product = $this->productRepository->create($product);
        return $product;
    }

    public function show($id)
    {
        $product = $this->productRepository->show($id);
        return $product;
    }

    public function update($request)
    {
        $id = $request->id;

        if (isset($request->image)) {
            $image_uplode = $this->uplodeImage($request);
        }else{
            $image_uplode = null;
        }
        $product = [
            'title'         => $request->title,
            'price'         => $request->price,
            'discount'      => $request->discount,
            'description'   => $request->description,
            'image'         => $image_uplode,
            'status'        => $request->status
        ];
        $product = $this->productRepository->update($request, $id);
        return $product;
    }

    public function destroy($id)
    {
        $product = $this->productRepository->destroy($id);
        return $product;
    }

    public function uplodeImage($data)
    {
        $file = $data->file('image');
        $image =UtilityService::$imageUploadPath['sider_image'].$file->getClientOriginalName();
        $file->move(UtilityService::$imageUploadPath['sider_image'],$file->getClientOriginalName());
        //$image = public_path().'/'.$image;
        $image = env("APP_URL").'/'.$image;
        return $image;
    }
}