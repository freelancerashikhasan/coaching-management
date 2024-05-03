<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function store(DepartmentRequest $request){
        $data = new Department();
        $data->name = $request->department_name ?? '';
        $data->created_by = Auth::user()->name ?? 'admin';
        $data->save();
        return response()->json($data);
    }
}
