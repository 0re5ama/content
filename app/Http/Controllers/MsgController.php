<?php

namespace App\Http\Controllers;

use App\Model\Msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function index()
    {
		$msgs = Msg::all();
		return view('msgindex')->with('msgs', $msgs);
    }

    public function show(Msg $msg)
    {
		return view('msgshow', compact('msg'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Msg $msg)
    {
        //
    }

    public function update(Request $request, Msg $msg)
    {
        //
    }

    public function destroy(Msg $msg)
    {
        //
    }
}
