<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headers extends Model
{
    use HasFactory;

    protected $fillable = [
        "title" => "{Title}",
        "subTitle" => "{Sub Title}",
        "image" => "{image.svg}",
        "logo" => "{logo.svg}"
    ];

    private static $header = [
            'id' => 1,
            'title' => "Plaza Planner",
            'subTitle' => "Planner for annual activity",
            'image' => "header.jpg",
            'logo' => "{logo.svg}"
    ];

    public static function index(){
        return collect(self::$header);
    }
}
