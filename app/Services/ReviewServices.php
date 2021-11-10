<?php

namespace App\Services;

use App\Repositories\Categories\CategorieRepositoryEloquent;
use App\Repositories\ReviewRepository;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ReviewServices
{
    protected $product = ['product_id', 'customer', 'review', 'star', 'user_ip'];

    private $reviewRepository;
    public function __construct(ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function index()
    {
        $product = $this->reviewRepository->index();
        return $product;
    }

    public function create($request)
    {
       //dd( $this->userCheck($request->ip()));
       $user_comment_day = $this->userCheck($request->ip());
       if ($user_comment_day < 5) {
        $review = [
            'product_id'    => $request->product_id,
            'customer'      => $request->customer,
            'review'        => $request->review,
            'star'          => $request->rating,
            'user_ip'       => $request->ip()
        ];

        Session::flash('message', 'Successful Post'); 
        Session::flash('alert-class', 'alert-success'); 

        $review = $this->reviewRepository->create($review);
        return $review;
       }else{
            Session::flash('message', 'cross your limit!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return false;
       }
    }

    public function show($id)
    {
        $review = $this->reviewRepository->show($id);
        return $review;
    }

    public function update($request,$id)
    {
        $review = [
            'product_id'    => $request->product_id,
            'customer'      => $request->customer,
            'review'        => $request->review,
            'star'          => $request->star,
            'user_ip'       => $request->ip()
        ];
        $review = $this->reviewRepository->update($review, $id);
        return $review;
    }

    public function destroy($id)
    {
        $review = $this->reviewRepository->destroy($id);
        return $review;
    }

    public function userCheck($user_ip)
    {
        $user_ip = $user_ip;
        $reviews = DB::table('reviews')->where('user_ip', $user_ip)->where('created_at', '>=', Carbon::now()->subDay())->get();
        $reviews_count = $reviews->count();
        return $reviews_count;
    }
}