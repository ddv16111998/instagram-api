<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Acts\Act */
class UserPostReactResource extends JsonResource
{
    private $isComment;
    public function __construct($resource, $isComment = false)
    {
        parent::__construct($resource);
        $this->isComment = $isComment;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
        if ($this->isComment){
            $data['comment'] = $this->pivot->content;
        }
        return $data;
    }
}
