<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Theme extends Resource
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
            "id" => $this->id,
            "slug" => $this->slug,
            "title" => $this->title,
            "link" => $this->link,
            "image" => $this->image,
            "description" => $this->description,
            "size" => $this->size,
            "version" => $this->version,
            "compatibility" => $this->compatibility,
            "author" => $this->author,
            "email" => $this->email,
            "website" => $this->website,
            "count" => $this->count,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
    }
}
