<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;


class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content'
    ];
    protected $translatable = [
        'title', 'content', 'image','file', 'writer'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
