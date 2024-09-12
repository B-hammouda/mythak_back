<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = [
       'name','description'
    ];
    protected $translatable = [
       'name','description'
    ];
    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}
