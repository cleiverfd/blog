<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function getRouteKeyName(){
        return "slug";
    }

    //relacion de uno a muchos
    public function post(){
        return $this->hasMany(Post::class);
    }
}
