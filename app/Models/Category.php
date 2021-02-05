<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends= [
        'parent',
    ];
    #one to many relationship
    public function duyurus()
    {
        return $this->hasMany(Duyuru::class);
    }
    #one to many inverse(tersi)
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    #one to many
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
