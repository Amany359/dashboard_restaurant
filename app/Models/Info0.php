<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info0 extends Model
{
    use HasFactory;

    protected $table ='info0';
    protected $fillable = [
        'title',
        'posts_url',
        'posts_title',
        'posts_imge',
        'posts_content',
        'url',
    ];
}
