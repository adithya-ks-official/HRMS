<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// In your controller file
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all(); // Fetch all departments from the database
        return view('departments.index', ['departments' => $departments]); // Pass departments to the view
    }
}

