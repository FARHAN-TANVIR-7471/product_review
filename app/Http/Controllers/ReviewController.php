<?php

namespace App\Http\Controllers;

use App\Services\ReviewServices;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    private $reviewServices;
    public function __construct(ReviewServices $reviewServices)
    {
        $this->reviewServices = $reviewServices;
    }
    public function store(Request $request)
    {
        $review = $this->reviewServices->create($request);
        //dd($review);
        return back();
    }
}
