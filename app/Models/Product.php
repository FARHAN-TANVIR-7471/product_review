<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'discount', 'description', 'image', 'status'];

    /**
     * Get the comments for the blog post.
     */
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
