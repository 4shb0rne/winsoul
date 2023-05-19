<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function getReviews($id)
    {
        $reviews = Review::where('productid', $id)->get();
        $product = Product::find($id);
        return view('pages/reviews/reviewlist', ['reviews' => $reviews, 'product' => $product]);
    }

    public function addReview(Request $request, $id)
    {
        $validate = $request->validate([
            'reviewscore' => 'required|numeric',
            'content' => 'required'
        ]);

        $user = Auth::user()->UserID;
        Review::create([
            'UserID' => $user,
            'ProductID' => $id,
            'reviewscore' => $validate['reviewscore'],
            'content' => $validate['content']
        ]);

        return redirect('reviews/'.$id);
    }

    public function deleteReview($id, $productid)
    {
        Review::find($id)->delete();
        return redirect('reviews/'.$productid);
    }
}
