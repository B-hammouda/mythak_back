<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Contact extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'email', 'subject', 'message', 'name', 'phone'
    ];
    protected $translatable = ['email', 'subject', 'message', 'name', 'phone'];
}
