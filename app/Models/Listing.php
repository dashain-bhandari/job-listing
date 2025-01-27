<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'email',
        'website',
        'description',
        'company',
        'tags',
        'location'
        ,'logo',
        'user_id'
    ];



    public function scopeFilter($query,array $filters){
if($filters["tag"]??false){
    return $query->where("tags","ilike","%".$filters["tag"]."%");
}
if($filters["search"]??false){
    return $query->where("title","ilike","%".$filters["search"]."%")
    ->orwhere("description","ilike","%".$filters["search"]."%")
    ->orwhere("tags","ilike","%".$filters["search"]."%");
}

// return $query->all();
    }

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
