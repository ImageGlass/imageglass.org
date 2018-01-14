<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ScreenShot extends Resource
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
            "table_name" => $this->table_name,
            "table_id" => $this->table_id,
            "link" => $this->link,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'delete_at' => (string) $this->delete_at,
        ];
    }
}
