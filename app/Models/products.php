<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "image"
    ];

    private static array $header = [
        [
            'id' => 1,
            'title' => "Jumbo Desk Calendar",
            'image' => "{image.svg}",
        ],
        [
            'id' => 2,
            'title' => "Student Planner",
            'image' => "{image.svg}",
        ],
        [
            'id' => 3,
            'title' => "Kalender Dinding",
            'image' => "{image.svg}",
        ]
        ,[
            'id' => 4,
            'title' => "Undated Calendar",
            'image' => "{image.svg}",
        ]
    ];

    public static function index(){
        return collect(self::$header);
    }
}
