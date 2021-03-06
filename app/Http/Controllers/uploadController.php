<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function upload(Request $request) {
        $name = $request->file('picture')->store('public/pictures');
        return response()->json(['filename' => $name]);
    }
}
