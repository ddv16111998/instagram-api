<?php

namespace App\Models\Posts\Scopes;

use App\Models\Posts\Post;

trait ScopePost{

    public function scopePublic($query)
    {
        return $query->where('access_modifier', Post::ACCESS_MODIFIER['public']);
    }

    public function scopePrivate($query, bool $isOrWhere = false)
    {
        $filter = 'where';
        if ($isOrWhere){
            $filter = 'orWhere';
        }
        return $query->{$filter}('access_modifier', Post::ACCESS_MODIFIER['private']);
    }

    public function scopeSomePeopleSee($query, bool $isOrWhere = false)
    {
        $user = auth()->user();
        $filter = 'where';
        if ($isOrWhere){
            $filter = 'orWhere';
        }
        return $query->{$filter}(function ($q){
            $q->where('access_modifier', Post::ACCESS_MODIFIER['some_people'])->whereHas('peoplesSee', function ($q1){
                $q1->where('post_people_see.user_id', 1);
            });
        });

    }
}
