<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function comment(): HasMany {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }
}
