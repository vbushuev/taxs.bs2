<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'user_id','title' ,'text'
    ];
    protected $table = 'news';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
