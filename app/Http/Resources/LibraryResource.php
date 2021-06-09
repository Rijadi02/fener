<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LibraryResource extends JsonResource
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
            "author" => $this->author,
            "link" => $this->link,
            "file" => $this->file,
            "image" => $this->img,
        ];
    }
}
