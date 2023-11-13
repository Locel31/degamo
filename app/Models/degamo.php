<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class degamo extends Model
{
    use HasFactory;
        protected $fillable = [
            'name',
            'last'
        ];
        protected $table = 'degamo';
}
