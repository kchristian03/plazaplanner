<?php

namespace App\Http\Controllers;

use App\Models\headers;
use App\Models\products;
use App\Models\testimony;

class calendarController extends Controller
{
    public function index()
    {
        return view('index', [
            'headers' => headers::index(),
            'products' => products::index(),
            'testimonies' => testimony::index(),
        ]);
    }
}
