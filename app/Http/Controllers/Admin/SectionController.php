<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function store(SectionRequest $request){
        $data = new Section();
        $data->name = $request->section_name ?? '';
        $data->created_by = Auth::user()->name ?? 'admin';
        $data->save();
        return response()->json($data);
    }
}
