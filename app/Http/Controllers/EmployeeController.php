<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->with('departments')->orderByDesc('created_at')->get();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::query()->orderByDesc('created_at')->get();

        return view('employees.create', compact('departments'));
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        $employee->departments()->sync($request->departments);

        return redirect()->route('employees.index')->with('success', 'Employee successfully added');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee->load('departments'),
            'depts' => Department::query()->orderByDesc('created_at')->get()
        ]);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        $employee->departments()->detach();

        if ($request->departments !== null) {
            $employee->departments()->sync($request->departments);
        }

        return redirect()->route('employees.index')->with('success', 'Employee successfully updated');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee successfully deleted');
    }
}
