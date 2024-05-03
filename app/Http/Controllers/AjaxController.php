<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Section;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDepartments(){
        $query = request()->input('search_text');
        if ($query) {
            $data = Department::where('deleted_at', null)->where('name', 'like', '%' . $query . '%')->orderBy('id', 'DESC')->get();
        } else {
            $data = Department::where('deleted_at', null)->orderBy('id', 'DESC')->get();
        }
        return response()->json($data);
    }
    public function getSections(){
        $query = request()->input('search_text');
        if ($query) {
            $data = Section::where('deleted_at', null)->where('name', 'like', '%' . $query . '%')->orderBy('id', 'DESC')->get();
        } else {
            $data = Section::where('deleted_at', null)->orderBy('id', 'DESC')->get();
        }
        return response()->json($data);
    }
    public function getClasses(){
        $query = request()->input('search_text');
        if ($query) {
            $data = StudentClass::where('deleted_at', null)->where('name', 'like', '%' . $query . '%')->orderBy('id', 'DESC')->get();
        } else {
            $data = StudentClass::where('deleted_at', null)->orderBy('id', 'DESC')->get();
        }
        return response()->json($data);
    }
}
