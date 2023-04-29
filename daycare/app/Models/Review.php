<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = ['rating', 'comment'];

    public static function getAverageRating() {
        $avgRating = self::avg('rating');
        return round($avgRating, 1);
    }
}