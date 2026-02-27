<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'description', 'category_id', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
        'category_id' => 'integer',
        'price' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
