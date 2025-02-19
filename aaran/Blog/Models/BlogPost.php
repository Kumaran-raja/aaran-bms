<?php

namespace Aaran\Blog\Models;

use Aaran\Common\Models\Common;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends Model
{

    protected $guarded = [];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(BlogTag::class);
    }

//    public static function type($str)
//    {
//        if ($str) {
//            return Common::find($str)->vname;
//        } else return '';
//    }

    public static function tagName($str)
    {
        if ($str) {
            return BlogTag::find($str)->vname;
        } else return '';
    }

}
