<?php

namespace App\Models\Posts\Relationships;

use App\Models\User;

trait RelationshipComment {
    public function comments(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'comment')->withPivot('content');
    }
}
