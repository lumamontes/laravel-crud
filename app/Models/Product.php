<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function relCategories()
    {
        return $this->hasOne(Category::class, 'foreign_key', 'local_key');
    }

}
