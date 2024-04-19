<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\StudentDataTable;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentDataTable $dataTable)
    {

        return view('admin.student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->birth_certificate = $request->birth_certificate;
        $data->father_name = $request->father_name;
        $data->father_nid = $request->father_nid;
        $data->father_phone = $request->father_phone;
        $data->mother_name = $request->mother_name;
        $data->mother_nid = $request->mother_nid;
        $data->mother_phone = $request->mother_phone;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->class_id = $request->class_id;
        $data->section_id = $request->section_id;
        $data->discipline = $request->discipline_id;
        $data->fee = $request->course_fee;
        // $data->due = $request->payment;
        // $data->payment = $request->payment;
        $data->type = $request->course_type;
        $data->password = Hash::make(12345678);
        $data->show_password = '12345678';
        $data->save();
        flash('Your contact has been removed.');
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
