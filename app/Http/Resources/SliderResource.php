<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $baseUrl = env('APP_URL');
        $path = $baseUrl.'/storage/gallery/slider/' ;
        return [
            'id' => $this->id,
            'image' => $path.($this->image),
        ];
    }
}
