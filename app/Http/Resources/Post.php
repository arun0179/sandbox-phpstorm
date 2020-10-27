<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\False_;

class Post extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'user' => [
                'name' => $this->user->name,
                'email' => $this->user->email
            ],
            'view_count' => $this->view_count,
            'is_popular' => $this->view_count > 10000,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
