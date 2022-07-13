<?php


namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class BlogResource extends JsonResource
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
        $path = $baseUrl.'/storage/blog/' ;

        return
            [
                'id' => $this->id,
                'title' => $this->title,
                'slug' => $this->slug,
                'content' => $this->content,
                'image' => $path.($this->image),
                'created_at' => $this->created_at,
                'update_at' => $this->update_at,
            ];

    }
}
