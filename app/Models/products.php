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
            'image' => "jumboDeskCalendar.png",
        ],
        [
            'id' => 2,
            'title' => "Student Planner",
            'image' => "studentPlanner1.jpg",
        ],
        [
            'id' => 3,
            'title' => "Kalender Dinding",
            'image' => "kalenderDinding.jpg",
        ]
        ,[
            'id' => 4,
            'title' => "Undated Calendar",
            'image' => "undatedCalendar.jpg",
        ]
    ];

    public static function index(){
        return collect(self::$header);
    }
}
