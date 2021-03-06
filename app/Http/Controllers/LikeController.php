<?php

namespace App\Http\Controllers;

use App\Models\Reply;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            //'user_id' => auth()-id()
            'user_id' => '1'
        ]);
    }

    public function unLikeIt(Reply $reply)
    {
        //$reply->like()->where('user_id', auth()->id())->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
