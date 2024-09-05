<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Comment extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'name', 'message'
    ];
    protected $translatable = [
        'name', 'message'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
