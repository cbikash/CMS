<?php


namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class CourseResource extends JsonResource
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
        $path = $baseUrl.'/storage/gallery/product/';
        return
            [
               'id' => $this->id,
               'title' => $this->title,
               'image' => $path.($this->coverImage),
               'content' => $this->description,
               'created_at' => $this->created_at,
                'update_at' => $this->update_at,
            ];
    }
}
