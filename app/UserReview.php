<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    //
    protected $table = 'user_review';
    protected $fillable = ['order_id', 'product_id', 'user_id', 'rating', 'review'];
}
