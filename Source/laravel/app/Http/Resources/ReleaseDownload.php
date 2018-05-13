<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReleaseDownload extends Resource
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
            "release_id" => $this->release_id,
            "type" => $this->type,
            "link" => $this->link,
            "checksum" => $this->checksum,
            "size" => $this->size,
            "count" => $this->count,
            "created_at" => (string) $this->created_at,
            "updated_at" => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
        return parent::toArray($request);
    }
}
