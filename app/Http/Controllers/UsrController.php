<?php

namespace App\Http\Controllers;

use App\Model\Usr;
use Illuminate\Http\Request;

class UsrController extends Controller
{
    public function index()
    {
		$usrs = Usr::all();
		return view('model.usr.index', compact('usrs'));
    }

    public function show(Usr $usr)
    {
		return view('model.usr.show')->with('usr', $usr);
    }

    public function create()
    {
		return view('model.usr.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Usr $usr)
    {
		return view('model.usr.create');
    }

    public function update(Request $request, Usr $usr)
    {
        //
    }

    public function destroy(Usr $usr)
    {
        //
    }
}
