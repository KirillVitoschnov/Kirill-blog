<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'updated_at',
        'title',
        'text',
        'image',
        'status',
        'category',
        'view_count'
    ];
    public function category_name()
    {
        return $this->hasMany('App\Models\NewsCategory','id','category');
    }
}
