<?php

namespace App\Models\Posts\Relationships;

use App\Models\User;

trait RelationshipUser {
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tag_user', 'post_id', 'user_id');
    }
}
