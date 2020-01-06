<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Section as SectionResource;

class Section extends JsonResource
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
            'name' => $this->name,
            'title' => $this->title,
            'subsections' => SectionResource::collection($this->subSections),
            'parent' => $this->parent,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
