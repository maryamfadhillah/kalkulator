<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hitung;

class HitungController extends Controller
{
    public function store(Request $request)
    {
        $operasi = $request->input('operasi');
        $bil1 = $request->input('bil1');
        $bil2 = $request->input('bil2');
        $result = 0;

        if ($operasi == 'tambah'){
            $result = $bil1 + $bil2;
        }else if ($operasi == 'kurang'){
            $result = $bil1 - $bil2;
        }else if ($operasi == 'kali'){
            $result = $bil1 * $bil2;
        }else if ($operasi == 'bagi'){
            $result = $bil1 / $bil2;
        }else{
            $result = 0;
        }

        $input = $request->all();
        $input['hasil'] = $result;
        Hitung::create($input);
    }
}
