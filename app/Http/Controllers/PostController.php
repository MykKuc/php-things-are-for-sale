<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request) {
        $thing = new Thing;
        $thing->name = $request->name;
        $thing->description = $request->description;
        $thing->save();

        return redirect('add-form')->with('status', 'Advertisement has been inserted');
    }
}
