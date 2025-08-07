<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
  public function create()
    {
      return view('employee.create');
    }

  public function store(Request $request)
    {
    $request->validate([
        'namelao'  => 'required',
        'nameeng'  => 'required',
        'mobile'  => 'required',
        'email' => 'required|email',
        'age'   => 'required|integer'
    ]);

      Employee::create($request->all());

      return redirect()->back()->with('success', 'Employee data saved!');
    }
}
