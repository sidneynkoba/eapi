<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
{
    public function toArray($request)
    {
        return [
            // 'id' => $this->id,
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star
        ];
    }
}
