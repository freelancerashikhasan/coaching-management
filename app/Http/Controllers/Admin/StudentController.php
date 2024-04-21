<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\StudentDataTable;
use App\Helpers\FileManager;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Student List';
        if (request()->ajax()) {
            $users = Student::where('deleted_at',null);

            return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="" class="btn btn-primary">Edit</a>';
            })
            ->addColumn('image', function ($user) {
                if ($user->name == null) {
                    $span = '<img style="width: 150px; border-radius: 80px; border: 3px dashed;" src="'.asset('img/user.png').'">';
                }else{
                    $span = '<img style="width: 150px; border-radius: 80px; border: 3px dashed;" src="'.asset('storage/student/'.$user->image).'">';
                }
                return $span;
            })
            ->addColumn('details', function ($user) {
                $name = $user->name ?? '';
                $father_name = $user->father_name ?? '';
                $father_phone = $user->father_phone ?? '';
                $class = $user->class ?? '';
                $roll = $user->roll ?? '';
                $table = <<<HTML
                <table class="table table-bordered">
                    <tr>
                        <td style="background-color: #403E3B; color: #FFF;">Name</td>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <td style="background-color: #403E3B; color: #FFF;">Father's Name</td>
                        <td>$father_name</td>
                    </tr>
                    <tr>
                        <td style="background-color: #403E3B; color: #FFF;">Father's Phone</td>
                        <td>$father_phone</td>
                    </tr>
                    <tr>
                        <td style="background-color: #403E3B; color: #FFF;">Class</td>
                        <td>$class</td>
                    </tr>
                    <tr>
                        <td style="background-color: #403E3B; color: #FFF;">Roll</td>
                        <td>$roll</td>
                    </tr>
                </table>
                HTML;
                return $table;
            })
            ->addColumn('download', function ($user) {
                return $user->name;
            })
            ->rawColumns(['action','image','details'])
            ->toJson();
        }
        return view('admin.student.index',compact('pageTitle'));
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:50',
            'roll' => 'required|string|max:50',
            'department_id' => 'nullable|integer',
            'father_name' => 'nullable|string|max:255',
            'father_nid' => 'nullable|string|max:50',
            'father_mobile' => 'nullable|string|max:20',
            'father_occupation' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'mother_nid' => 'nullable|string|max:50',
            'mother_mobile' => 'nullable|string|max:20',
            'mother_occupation' => 'nullable|string|max:255',
            'student_mobile' => 'nullable|string|max:20',
            'student_email' => 'nullable|email|max:255',
            'class' => 'nullable|string|max:50',
            'date' => 'nullable|date',
            'nid_birth_input' => 'nullable|file|max:2048|mimes:pdf',
            'gender' => 'nullable|string',
            'transfer_letter_input' => 'nullable|file|max:2048|mimes:pdf',
            'father_nid_input' => 'nullable|file|max:2048|mimes:pdf',
            'mother_nid_input' => 'nullable|file|max:2048|mimes:pdf',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
            'marksheet_input' => 'nullable|file|max:2048|mimes:pdf',
        ]);

          $file = new FileManager();
          if ($request->image) {
              if ($request->image != null) {
                  Storage::disk('student')->delete($request->image);
              }
              $photo = $request->image;
              $file->folder('student')->prefix('student')->upload($photo) ? $image = $file->getName() : null;
          } else {
              $image = null;
          }

          if ($request->nid_birth_input) {
              if ($request->nid_birth_input != null) {
                  Storage::disk('student')->delete($request->nid_birth_input);
              }
              $photo2 = $request->nid_birth_input;
              $file->folder('student')->prefix('student-nid-birth')->upload($photo2) ? $nid_birth = $file->getName() : null;
          } else {
              $nid_birth = null;
          }

          if ($request->transfer_letter_input) {
              if ($request->transfer_letter_input != null) {
                  Storage::disk('student')->delete($request->transfer_letter_input);
              }
              $photo3 = $request->transfer_letter_input;
              $file->folder('student')->prefix('student-transfer_letter')->upload($photo3) ? $transfer_letter = $file->getName() : null;
          } else {
              $transfer_letter = null;
          }
          if ($request->marksheet_input) {
              if ($request->marksheet_input != null) {
                  Storage::disk('student')->delete($request->marksheet_input);
              }
              $photo3 = $request->marksheet_input;
              $file->folder('student')->prefix('student-marksheet')->upload($photo3) ? $marksheet = $file->getName() : null;
          } else {
              $marksheet = null;
          }

          if ($request->father_nid_input) {
              if ($request->father_nid_input != null) {
                  Storage::disk('student')->delete($request->father_nid_input);
              }
              $photo4 = $request->father_nid_input;
              $file->folder('student')->prefix('student-father-nid')->upload($photo4) ? $father_nid = $file->getName() : null;
          } else {
              $father_nid = null;
          }

          if ($request->mother_nid_input) {
              if ($request->mother_nid_input != null) {
                  Storage::disk('student')->delete($request->mother_nid_input);
              }
              $photo5 = $request->mother_nid_input;
              $file->folder('student')->prefix('student-mother-nid')->upload($photo5) ? $mother_nid = $file->getName() : null;
          } else {
              $mother_nid = null;
          }

          $student = new Student();

          // Assign values from validated request data to the Student instance
          $student->name = $validatedData['name'];
          $student->student_id = $validatedData['student_id'];
          $student->roll = $validatedData['roll'];
          $student->department_id = $validatedData['department_id'];
          $student->father_name = $validatedData['father_name'];
          $student->father_nid = $validatedData['father_nid'];
          $student->father_mobile = $validatedData['father_mobile'];
          $student->father_occupation = $validatedData['father_occupation'];
          $student->mother_name = $validatedData['mother_name'];
          $student->mother_nid = $validatedData['mother_nid'];
          $student->mother_mobile = $validatedData['mother_mobile'];
          $student->mother_occupation = $validatedData['mother_occupation'];
          $student->mobile = $validatedData['student_mobile'];
        //   $student->email = $validatedData['student_email'];
          $student->class_id = $validatedData['class'];
          $student->date = $validatedData['date'];
          $student->image = $image;
          $student->nid_birth = $nid_birth;
          $student->gender = $validatedData['gender'];
          $student->transfer_letter = $marksheet;
          $student->father_nid = $father_nid;
          $student->mother_nid = $mother_nid;


          $student->save();
          return response()->json('done');

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
