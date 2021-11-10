<?php

namespace App\Http\Controllers;

use App\Services\ProductServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $productService;
    public function __construct(ProductServices $ProductService)
    {
        $this->middleware('auth');
        $this->productService = $ProductService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->productService->index();
        return view('home',compact('products'));
    }
}
