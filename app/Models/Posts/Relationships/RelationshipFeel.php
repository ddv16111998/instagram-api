<?php

namespace App\Models\Posts\Relationships;

use App\Models\Feels\Feel;

trait RelationshipFeel {
    public function feel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Feel::class, 'feel_id');
    }
}
