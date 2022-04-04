<?php

namespace App\Http\Controllers\Api\TimeLine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TweetResource;
use App\Http\Resources\TweetCollection;
use App\Models\Tweet;

class TimeLineController extends Controller
{


    public function index(Request $request){

       // dd($request->user()->tweetsFromFollowing);

       $tweets = $request->user()
       ->tweetsFromFollowing()
       ->paginate(1);
       return new TweetCollection($tweets);
    }
}
