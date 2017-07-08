<?php

namespace App\Http\Controllers;

use App\Model\Usr;
use Illuminate\Http\Request;

class UsrController extends Controller
{
    public function index()
    {
		$usrs = Usr::all();
		return view('usrindex', compact('usrs'));
    }

    public function show(Usr $usr)
    {
		return view('usrshow')->with('usr', $usr);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Usr $usr)
    {
        //
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
