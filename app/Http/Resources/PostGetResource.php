<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostGetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'picture' => $this->base64image,
            'caption' => $this->caption,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
