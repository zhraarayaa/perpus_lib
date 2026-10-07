<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'description', 'year_published'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the users that have borrowed the book.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'loans')->withPivot('loan_date', 'return_date')
            ->withTimestamps();
    }
}