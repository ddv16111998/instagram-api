<?php

namespace App\Http\Resources;

use App\Models\Posts\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Posts\Post */
class PostResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $feel = $this->feel()->first();
        $act = $this->act()->first();
        return [
            'id' => $this->id,
            'caption' => $this->caption,
            'access_modifier' => $this->access_modifier,
            'access_modifier_text' => Post::ACCESS_MODIFIER_TEXT[$this->access_modifier],
            'is_turn_off_comment' => $this->is_turn_off_comment,
            'link_id' => $this->link_id,
            'feel' => new FeelResource($feel),
            'act' => new ActResource($act),
            'checkin_position' => $this->checkin_position,
            'medias' => $this->medias(),
            'user_tag' => new UserPostTagCollection($this->peoplesSee),
            'like_count' => $this->likes_count,
            'comment_count' => $this->comments_count,
            'user_like_last' => $this->likes->count() ? new UserPostReactResource($this->likes[0]) : null,
            'user_comment_last' => $this->comments->count() ? new UserPostReactResource($this->comments[0], true) : null
        ];
    }
}
