<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    // where is the issue?
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'class'=>ClassResource::make($this->whenLoaded('classes')),
            'section'=>SectionResource::make($this->whenLoaded('section')),
            'created_at_formatted' => $this->created_at->toFormattedDateString(),
            'updated_at_formatted' => $this->updated_at->toFormattedDateString()
        ];
    }
}
