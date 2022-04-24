<?php

namespace App\Models\Acts;

use App\Models\Acts\Scopes\Scope;
use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    use Scope;
    protected $fillable = [
        'name',
        'parent_id',
        'active',
        'icon'
    ];
}
