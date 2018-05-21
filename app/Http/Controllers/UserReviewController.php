<?php

namespace App\Http\Controllers;

use App\UserReview;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function index() {
        return UserReview::all();
    }

    public function show(UserReview $userReview){ 
        $request->validate([
            'id' => 'required'
        ]);
        return $userReview;
    }

    public function store(Request $request){
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required',
            'review' => 'required'
        ]);

        if($request->rating < 1.0 || $request->rating > 5.0){
            return response()->json("Review Only on range 1.0 - 5.0", 400);    
        }
        $userReview = UserReview::create($request->all());
        return response()->json($userReview, 200);
    }

    public function update(Request $request, UserReview $userReview){
        if($request->rating < 1.0 || $request->rating > 5.0){
            return response()->json("Review Only on range 1.0 - 5.0", 400);    
        }
        $userReview->update($request->all());
        return response()->json($userReview, 200);
    }

    public function delete(UserReview $userReview){
        $userReview->delete();
        return response()->json("Success", 200);
    }
}
