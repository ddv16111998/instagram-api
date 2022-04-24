<?php

namespace App\Models\Posts\Relationships;

use App\Models\Acts\Act;

trait RelationshipAct {
    public function act(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Act::class, 'act_id');
    }
}
