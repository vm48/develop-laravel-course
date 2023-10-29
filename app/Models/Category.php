<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable
        = [
            'name',
        ];
    protected $casts
        = [
            'name' => 'string'
        ];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_categories',
            'category_id', 'book_id');
    }
}
