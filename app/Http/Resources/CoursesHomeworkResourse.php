<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesHomeworkResourse extends JsonResource
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
            "homework" => LectureHomeworkResource::collection($this->lectures)

        ];
    }
}
