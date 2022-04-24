<?php

namespace App\Models\Posts\Relationships;

use App\Models\User;

trait RelationshipPostPeopleSee {
    public function peoplesSee(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_people_see', 'post_id', 'user_id')->withPivot('user_id');
    }
}
