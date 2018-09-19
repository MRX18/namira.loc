<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subcategory extends Model
{
    public function categoryId()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }
}
