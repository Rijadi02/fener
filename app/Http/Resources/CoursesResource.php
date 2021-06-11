<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesResource extends JsonResource
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
            "title" => $this->title,
            "image" => $this->img,
            "description" => $this->description,
            "price" => $this->price,
            "teacher" => new UserResource($this->user),
            "lectures" => LecturesResource::collection($this->lectures)

        ];
    }
}
