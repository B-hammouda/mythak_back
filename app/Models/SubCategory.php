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
        'name_ar','name_en','description_ar','description_en','category_id'
     ];
     protected $translatable = [
        'name_ar','name_en','description_ar','description_en','category_id'
     ];
     public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class);
     }


}
