<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Language extends Resource
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
            "name" => $this->name,
            "local_name" => $this->local_name,
            "link" => $this->link,
            "description" => $this->description,
            "is_outdated" => $this->is_outdated,
            "min_version" => $this->min_version,
            "author" => $this->author,
            "count" => $this->count,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
    }
}
