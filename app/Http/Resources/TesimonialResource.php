<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class TesimonialResource extends JsonResource
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
        $path = $baseUrl.'/storage/gallery/testimonial/' ;

        return [
            'name' => $this->name,
            'post' => $this->post_of,
            'description' => $this->description,
            'image' => $path.$this->image
        ];
    }
}
