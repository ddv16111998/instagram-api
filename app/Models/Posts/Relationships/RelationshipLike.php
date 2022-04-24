<?php

namespace App\Models\Posts\Relationships;
use App\Models\User;

trait RelationshipLike {
    public function likes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'like');
    }
}
