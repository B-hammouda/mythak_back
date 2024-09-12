<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;


class Article extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'title', 'content', 'image','file', 'writer', 'category_id','sub_category_id'
    ];
    protected $translatable = [
        'title', 'content', 'writer'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class);
     }
     public function sub_category(): BelongsTo
     {
         return $this->belongsTo(SubCategory::class);
     }
}
