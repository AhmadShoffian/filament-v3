<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
     public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        return response()->json(['success' => $imageName]);
    }
}
