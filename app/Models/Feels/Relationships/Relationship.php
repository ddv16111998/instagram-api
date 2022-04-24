<?php

namespace App\Models\Feels\Relationships;

use App\Models\Posts\Post;

trait Relationship {
    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
