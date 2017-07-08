<?php

namespace App\Http\Controllers;

use App\Model\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
		$emps = Employee::all();
		return view('empindex', compact('emps'));
    }

    public function show(Employee $emp)
    {
		return view('empshow')->with('emp', $emp);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Employee $employee)
    {
        //
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
