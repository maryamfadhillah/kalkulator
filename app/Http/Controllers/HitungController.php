<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hitung;

class HitungController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        Hitung::create($input);
    }
}
