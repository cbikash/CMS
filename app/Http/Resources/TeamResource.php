<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
        $path = $baseUrl.'/storage/team/' ;

        return [
            'name' => $this->name,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'viber' =>$this->viber,
            'post' => $this->post,
            'image' => $path.$this->image,
            'description'=>$this->description,
        ];
    }
}
