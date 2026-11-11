<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(): View
    {
        return view('kalkulator.segitiga');
    }

    public function hitungSegitiga(Request $request): View
    {
        $validated = $request->validate([
            'alas' => ['required', 'numeric', 'gt:0'],
            'tinggi' => ['required', 'numeric', 'gt:0'],
        ]);

        $luas = ($validated['alas'] * $validated['tinggi']) / 2;

        return view('kalkulator.segitiga', [
            'alas' => $validated['alas'],
            'tinggi' => $validated['tinggi'],
            'luas' => $luas,
        ]);
    }
}
