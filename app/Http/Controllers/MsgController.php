<?php

namespace App\Http\Controllers;

use App\Model\Msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function index()
    {
		$msgs = Msg::all();
		return view('model.msg.index')->with('msgs', $msgs);
    }

    public function show(Msg $msg)
    {
		return view('model.msg.show', compact('msg'));
    }

    public function create()
    {
		return view('model.msg.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Msg $msg)
    {
		return view('model.msg.edit');
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
