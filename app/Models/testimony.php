<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimony extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "rating",
        "comment"
    ];

    private static array $header = [
        [
            'id' => 1,
            'name' => "Jumbo Desk Calendar",
            'rating' => "{image.svg}",
            'comment' => "{isi}"
        ],
        [
            'id' => 2,
            'name' => "Jumbo Desk Calendar",
            'rating' => "{image.svg}",
            'comment' => "{isi}"
        ],
    ];

    public static function index(){
        return collect(self::$header);
    }
}
