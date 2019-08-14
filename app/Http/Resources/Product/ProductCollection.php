<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => round(( 1 - ($this->discount/100)) * $this->price, 2),
            'rating' => round($this->reviews->sum('star') / $this->reviews->count('star'), 2),
            'href' => [
                'link' => route('products.show', $this->id)
            ]
        ];
    }
}
