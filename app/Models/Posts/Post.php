<?php

namespace App\Models\Posts;

use App\Models\Posts\Methods\MethodLike;
use App\Models\Posts\Methods\MethodComment;
use App\Models\Posts\Methods\MethodMedia;
use App\Models\Posts\Relationships\RelationshipAct;
use App\Models\Posts\Relationships\RelationshipComment;
use App\Models\Posts\Relationships\RelationshipFeel;
use App\Models\Posts\Relationships\RelationshipLike;
use App\Models\Posts\Relationships\RelationshipMedia;
use App\Models\Posts\Relationships\RelationshipPostPeopleSee;
use App\Models\Posts\Relationships\RelationshipUser;
use App\Models\Posts\Scopes\ScopePost;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    //relationship media
    use InteractsWithMedia;
    use RelationshipMedia;

    use RelationshipUser, RelationshipFeel, RelationshipAct, RelationshipLike, RelationshipComment, RelationshipPostPeopleSee;

    //method media
    use MethodMedia;

    //method react
    use MethodLike, MethodComment;

    //scope

    use ScopePost;

    protected $fillable = [
        'id',
        'caption',
        'access_modifier',
        'is_turn_off_comment',
        'link_id', // copy link,
        'feel_id',
        'act_id',
        'checkin_position'
    ];

    const ACCESS_MODIFIER = [
      'private' => 1,
      'public' => 2,
      'some_people' => 3
    ];

    const ACCESS_MODIFIER_TEXT = [
        1 => "Riêng tư",
        2 => "Công khai",
        3 => "Chỉ một số người"
    ];

    protected static function boot()
    {
        parent::boot();

        $friendIds = [1,2,3];
//        static::addGlobalScope('friend', function (\Builder $builder) use ($friendIds) {
//            $builder->whereIn('user_id', $friendIds);
//        });
    }
}
