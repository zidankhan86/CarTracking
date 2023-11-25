<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brands(): BelongsTo
    {
        return $this->belongsTo(User::class, 'brand_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Book::class);


    }
}
