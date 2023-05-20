<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function getReviews($id)
    {
        $reviews = Review::where('productid', $id)->get();
        $product = Product::find($id);
        $number = count($reviews);
        $review5star = Collection::make($reviews)->filter(function ($review) {
            return $review->reviewscore == 5;
        })->count()/$number*100;
        $review4star = Collection::make($reviews)->filter(function ($review) {
            return $review->reviewscore == 4;
        })->count()/$number*100;
        $review3star = Collection::make($reviews)->filter(function ($review) {
            return $review->reviewscore == 3;
        })->count()/$number*100;
        $review2star = Collection::make($reviews)->filter(function ($review) {
            return $review->reviewscore == 2;
        })->count()/$number*100;
        $review1star = Collection::make($reviews)->filter(function ($review) {
            return $review->reviewscore == 1;
        })->count()/$number*100;
        return view('pages/reviews/reviewlist', ['reviews' => $reviews, 'product' => $product, 'star5'=> $review5star,
    'star4'=> $review4star, 'star3' => $review3star, 'star2' => $review2star, 'star1' => $review1star]);
    }


    public function addReview(Request $request, $id)
    {
        $messages = [
            'reviewscore.min' => 'Review Score must be filled with at least 1 star',
            'content.required' => 'Review Content must be filled'
        ];

        $validator = Validator::make($request->all(), [
            'reviewscore' => 'required|numeric|min:1',
            'content' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user()->UserID;
        Review::create([
            'UserID' => $user,
            'ProductID' => $id,
            'reviewscore' => $request->input('reviewscore'),
            'content' => $request->input('content')
        ]);

        return redirect('reviews/'.$id);
    }


    public function deleteReview($id, $productid)
    {
        Review::find($id)->delete();
        return redirect('reviews/'.$productid);
    }
}
