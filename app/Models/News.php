<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'updated_at',
        'category',
        'title',
        'text',
        'image',
        'status',
        'view_count'
    ];
    use HasFactory;

}
