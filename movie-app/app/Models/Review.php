<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['film', 'user', 'rating', 'tanggal'];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
    
}
