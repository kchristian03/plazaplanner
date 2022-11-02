<?php

namespace App\Http\Controllers;

use App\Models\headers;
use Illuminate\Http\Request;

class HeadersController extends Controller
{
    public function index()
    {
        return view('index', [
            'pageTitle' => 'Plaza Planner',
            'maintitle' => 'Writers in my library',
            'headers' => headers::index()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(headers $headers)
    {
    }

    public function edit(headers $headers)
    {
    }

    public function update(Request $request, headers $headers)
    {
    }

    public function destroy(headers $headers)
    {
    }
}
