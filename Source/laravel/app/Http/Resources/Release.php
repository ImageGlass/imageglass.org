<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Release extends Resource
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
            "title" => $this->title,
            "slug" => $this->slug,
            "image" => $this->image,
            "changelog" => $this->changelog,
            "release_type" => $this->release_type,
            "version" => $this->version,
            "requirements" => $this->requirements,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
    }
}
