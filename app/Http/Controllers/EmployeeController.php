<?php

namespace App\Http\Controllers;

use App\Model\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
		$emps = Employee::all();
		return view('model.emp.index', compact('emps'));
    }

    public function show(Employee $emp)
    {
		return view('model.emp.show')->with('emp', $emp);
    }


    public function create()
    {
		return view('model.emp.create');
    }


    public function store(Request $request)
    {
		Employee::create([
		'name' => request('name'),
		'joined' => request('joined'),
		]);

		return redirect('/emp');
    }
	

    public function edit(Employee $employee)
    {
		return view('model.emp.edit');
    }

    public function update(Request $request, Employee $employee)
    {
        //
    }

    public function destroy(Employee $employee)
    {
        //
    }
}
