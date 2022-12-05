<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['title','value','tags','image','desc'];
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags','like', '%'
            .request('tag').'%');
        }
    }
}
