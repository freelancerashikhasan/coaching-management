@extends('layouts.admin.app')
@section('content')
@push('css')
    @include('admin.student.internal-assets.css')
@endpush

  <div class="breadcumb" style="padding: 30px 25px;">
    {!! modal('student') !!}
  </div>

    <div class="contetent" style="padding-bottom:100px;">
        <div class="title">
            <p>Add New Student <br>
            <img class="line" style="width: 147px;" src="{{ asset('icon/hr.svg') }}" alt="">

            </p>
        </div>
        <div class="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="prefix d-flex">
                        <div class="pre-img" id="studentImageContainer">
                            <img class="student_image" src="{{ asset('img/student-img.png') }}" alt="">
                        </div>
                        <div class="pre-name">
                            <h5 id="student_name">Student Name</h5>
                            <p>ID : <span id="pre_student_id"></span></p>
                        </div>
                    </div>
                    <div class="form-data pt-5">
                       <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="name" class="form-label">Student Name</p>
                                            <input type="text" name="name" id="name" placeholder="Enter Your Name">
                                            <span id="name_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Department</p>
                                            <select name="department_id" class="select2" id="department_id">
                                                <option value="">Science</option>
                                                <option value="">Arts</option>
                                                <option value="">Commerce</option>
                                            </select>
                                        </div>
                                        <span id="department_id_Error"></span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Class</p>
                                            <select name="class_id" class="select2" id="class_id">
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                            </select>
                                        </div>
                                        <span id="class_id_Error"></span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Section</p>
                                            <select name="section_id" class="select2" id="section_id">
                                                <option value="">A</option>
                                                <option value="">B</option>
                                                <option value="">C</option>
                                            </select>
                                        </div>
                                        <span id="section_id_Error"></span>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="name" class="form-label">Fathers Name</p>
                                            <input type="text" name="name" id="father_name" placeholder="Enter Your Father Name">
                                            <span id="father_name_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Fathers NID No</p>
                                            <input type="text" name="father_nid" id="father_nid" placeholder="12345678">
                                            <span id="father_nid_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Fathers Mobile No</p>
                                            <input type="text" name="father_mobile" id="father_mobile" placeholder="012">
                                            <span id="father_mobile_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Fathers Occupation</p>
                                            <input type="text" name="father_occupation" id="father_occupation" placeholder="Farmar">
                                            <span id="father_occupation_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="name" class="form-label">Mothers Name</p>
                                            <input type="text" name="mother_name" id="mother_name" placeholder="Enter Your Mothers Name">
                                            <span id="mother_name_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Mothers NID No</p>
                                            <input type="text" name="mother_nid" id="mother_nid" placeholder="12345678">
                                            <span id="mother_nid_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Mothers Mobile No</p>
                                            <input type="text" name="mother_mobile" id="mother_mobile" placeholder="012">
                                            <span id="mother_mobile_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Mothers Occupation</p>
                                            <input type="text" name="mother_occupation" id="mother_occupation" placeholder="Farmar">
                                            <span id="mother_occupation_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="name" class="form-label">Student Mobile No</p>
                                            <input type="text" name="student_mobile" id="student_mobile" placeholder="Student mobile No">
                                            <span id="student_mobile_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Student E-mail No</p>
                                            <input type="text" name="student_email" id="student_email" placeholder="123@gmail.com">
                                            <span id="student_email_Error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Class Roll</p>
                                            <input type="text" name="roll" id="roll" placeholder="012">
                                            <span id="roll_Error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 pt-2">
                                        <div class="">
                                            <p for="" class="form-label">Date</p>
                                            <input type="text" name="date" id="date" value="{{ date('d-m-Y') }}">
                                            <span id="date_Error"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-0 col-sm-0"></div>
                       </div>
                       <div class="d-flex">
                            <div class="d-flex mt-5">
                                <div class="pdf_sec me-5">
                                    <div class="">
                                        <p for="" class="form-label">Add Profile Picture</p>
                                        <div class="profile_pic" id="profilePicContainer">
                                            <label for="fileInput">
                                                <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                            </label>
                                            <input type="file" class="d-none" id="fileInput" class="file_input" accept="image/*" onchange="displaySelectedImage()">
                                            <img id="selectedImage" class="selected_image" alt="">
                                        </div>

                                        <span id="date_Error"></span>
                                    </div>
                                </div>
                                <div class="pdf_sec me-5">
                                    <a onclick="triggerFileInputClick('nid_birth_input')">
                                        <div class="">
                                            <p for="" class="form-label">Add birth/NID (Pdf)</p>
                                            <div class="profile_pic" id="nid_pic">
                                                <img class="upload nidPdfImage" src="{{ asset('img/upload.svg') }}" alt="">
                                            </div>
                                            <input type="file" class="d-none" name="nid_birth_input" id="nid_birth_input" onchange="showPdfImage('#nid_birth_input','#nid_pic')">
                                            <span class="text-danger" id="nid_birth_input_Error"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_sec d-flex mt-5">
                                <div class="pdf_sec ">
                                    <div class="">
                                        <p for="" class="form-label">Select Gander</p>
                                            <div class="d-flex">
                                                <span class="gender_text ">Male</span>
                                                <input type="radio" checked name="gender" id="gender">
                                            </div>
                                            <div class="d-flex mt-2">
                                                <span class="gender_text">Female</span>
                                                <input type="radio" name="gender" id="gender">
                                            </div>
                                            <div class="d-flex mt-2">
                                                <span class="gender_text">Others</span>
                                                <input type="radio" name="gender" id="gender">
                                            </div>
                                        <span id="date_Error"></span>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="d-flex mt-5">
                            <div class="pdf_sec me-5">
                               <a  onclick="triggerFileInputClick('transfer_letter_input')">
                                    <div class="">
                                        <p for="" class="form-label">Add Transfer letter (Pdf*)</p>
                                        <div class="profile_pic" id="transfer_pic">
                                            <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                        </div>
                                        <input type="file" class="d-none" name="transfer_letter_input" id="transfer_letter_input" onchange="showPdfImage('#transfer_letter_input','#transfer_pic')">
                                        <span class="text-danger" id="transfer_letter_input_Error"></span>
                                    </div>
                               </a>
                            </div>
                            <div class="pdf_sec me-5">
                                <a  onclick="triggerFileInputClick('marksheet_input')">
                                    <div class="">
                                        <p for="" class="form-label">Add Marksheet (Pdf*)</p>
                                        <div class="profile_pic" id="marksheet_pic">
                                            <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                        </div>
                                        <input type="file" class="d-none" name="marksheet_input" id="marksheet_input" onchange="showPdfImage('#marksheet_input','#marksheet_pic')">
                                        <span id="marksheet_input_Error"></span>
                                        <span class="text-danger" id="marksheet_input_Error"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="pdf_sec me-5">
                               <a  onclick="triggerFileInputClick('father_nid_input')">
                                    <div class="">
                                        <p for="" class="form-label">Add Fathers NID (Pdf)</p>
                                        <div class="profile_pic" id="father_nid_pic">
                                            <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                        </div>
                                        <input type="file" class="d-none" name="father_nid_input" id="father_nid_input" onchange="showPdfImage('#father_nid_input','#father_nid_pic')">
                                        <span class="text-danger" id="father_nid_input_Error"></span>
                                    </div>
                               </a>
                            </div>
                            <div class="pdf_sec me-5">
                                <a  onclick="triggerFileInputClick('mother_nid_input')">
                                    <div class="">
                                        <p for="" class="form-label">Add Mothers NID (Pdf)</p>
                                        <div class="profile_pic" id="mother_nid_pic">
                                            <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                        </div>
                                        <input type="file" class="d-none" name="mother_nid_input" id="mother_nid_input" onchange="showPdfImage('#mother_nid_input','#mother_nid_pic')">
                                        <span class="text-danger" id="mother_nid_input_Error"></span>
                                    </div>
                                </a>
                            </div>

                       </div>
                       <div class="row mt-5">

                            <input type="hidden" name="row_id" id="row_id">

                            <div class="col-md-12" style="justify-content: space-between;">
                                <button class="btn btn-primary me-2" onclick="addStudentData()">Save</button>
                                <button class="btn btn-primary me-2 d-none" onclick="UpdateStudent()">Update</button>
                                <button class="btn btn-success me-2">Save & print</button>
                                <button class="btn btn-info me-2">Daft</button>

                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.department.modal')
    @include('admin.section.modal')
@endsection
@push('script')
    @include('admin.student.internal-assets.js')
<script>

    flatpickr("#date", {
        dateFormat: "d-m-Y",

    });

</script>
@endpush

