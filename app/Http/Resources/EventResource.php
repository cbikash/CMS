<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends  JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return
            [
                'id' => $this->id,
                'title' => $this->title,
                'start' => $this->startDate,
                'end' => $this->endDate,
                'description' => $this->description,
                'created_at' => $this->created_at,
                'update_at' => $this->update_at,
            ];
    }
}
