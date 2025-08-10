<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publish_year',
        'genre',
        'availability_status'
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
