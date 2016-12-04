<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PoolController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pools.index');
    }

    public function store(Request $request)
    {
print_r($request);exit;
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->pools()->create([
            'name' => $request->name,
        ]);

        return redirect('/pools');
    }
}
