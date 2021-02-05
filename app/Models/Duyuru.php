<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duyuru extends Model
{
    use HasFactory;
    #one to many (inverse)/Belongs to //birden cok duyuru bir categorye aitlik
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
