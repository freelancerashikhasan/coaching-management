<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentClassRequest;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentClassController extends Controller
{
    public function store(StudentClassRequest $request){
        $data = new StudentClass();
        $data->name = $request->class_name ?? '';
        $data->created_by = Auth::user()->name ?? 'admin';
        $data->save();
        return response()->json($data);
    }
}
