<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class News extends Resource
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
            "image" => $this->image,
            "content" => $this->content,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
    }
}
