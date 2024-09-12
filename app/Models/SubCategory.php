<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;


class SubCategory extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = [
        'name','description','category_id'
     ];
     protected $translatable = [
        'name','description'
     ];
     public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class);
     }


}
