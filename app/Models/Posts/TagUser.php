<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class TagUser extends Model
{
    protected $fillable = [
        'post_id',
        'user_id'
    ];
}
