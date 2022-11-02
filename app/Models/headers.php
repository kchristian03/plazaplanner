<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headers extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "subTitle",
        "image",
        "logo"
    ];

    private static array $header = [
        [
            'id' => 1,
            'title' => "{Title}",
            'subTitle' => "{Sub Title}",
            'image' => "{image.svg}",
            'logo' => "{logo.svg}"
        ]
    ];

    public static function index(){
        return collect(self::$header);
    }
}
