<?php

namespace App\Models\Feels\Scopes;

use Illuminate\Http\Request;

trait Scope {

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeSearch($query, Request $request)
    {
        if ($q = $request->query('q')){
            return $query->whereLike('name', '%'.$q.'%');
        }
    }
}
