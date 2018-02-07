<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\ArticleRelationshipResource;

class ArticleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'          => 'articles',
            'id'            => (string)$this->id,
            'attributes'    => [
                'title' => $this->title,
            ],
            'links'         => [
                'self' => route('articles.show', ['article' => $this->id]),
            ],
        ];
    }
}