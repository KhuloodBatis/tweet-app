<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TweetResource extends JsonResource
{    /**

    */




    public function toArray($request)
    {
      return [
          'id'=>$this->id,
          'body' => $this->body,
          'user' => new UserResource($this->user),
      ];
    }
}
