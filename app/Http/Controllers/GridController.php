<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class GridController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->get();
        $departments = Department::query()->with('employees')->orderByDesc('created_at')->get();

        return view('grid', compact('employees', 'departments'));
    }
}
