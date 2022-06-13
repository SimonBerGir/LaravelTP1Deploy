<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmCriticResource extends JsonResource
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
            'title' => $this->title,
            'release_year' => $this->release_year,
            'length' => $this->length,
            'description' => $this->description,
            'rating' => $this->rating,
            'language_id' => $this->language_id,
            'critics' => CriticResource::collection($this->critics),
        ];
    }
}
