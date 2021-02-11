<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description', 'image'
    ];

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
