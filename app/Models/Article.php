<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'price',
        'quantity',
        'user_id',
        'category_id',
        'published',
        'publication_date',
    ];
}
