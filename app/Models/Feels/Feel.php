<?php

namespace App\Models\Feels;

use App\Models\Feels\Relationships\Relationship;
use App\Models\Feels\Scopes\Scope;
use Illuminate\Database\Eloquent\Model;

class Feel extends Model
{
    use Relationship, Scope;
}
