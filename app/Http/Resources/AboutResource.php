<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $baseUrl = env('APP_URL');
        $path = $baseUrl.'/storage/gallery/about/' ;

        return
            [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'image' => $path.($this->image),
            ];

    }
}
