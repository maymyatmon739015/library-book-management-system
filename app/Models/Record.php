<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'borrowing_id', 
        'action_type', 
        'action_date', 
        'remarks'
    ];

    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }
}
