<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransmissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'cars' => CarResource::collection($this->cars),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }

    public static $wrap = 'transmission';
}
