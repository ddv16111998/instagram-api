<?php

namespace App\Models\Acts\Scopes;

trait Scope {
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
