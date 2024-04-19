@extends('layouts.admin.app')
@section('content')
<head>

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">

</head>
@push('css')
    @include('admin.student.internal-assets.css')
@endpush
    <div class="contetent" style="padding-bottom:100px;">
        <div class="title">
            <p>Add New Student</p>
        </div>
        <div class="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="prefix d-flex">
                        <div class="pre-img" id="studentImageContainer">
                            <img class="student_image" src="{{ asset('img/student-img.png') }}" alt="">
                        </div>
                        <div class="pre-name">
                            <h5 id="student_name">Md. Ismail Prodhan</h5>
                            <p>ID : 123456789</p>
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
                                            <p for="" class="form-label">Student ID</p>
                                            <input type="text" name="student_id" id="student_id" placeholder="12345678">
                                            <span id="student_id_Error"></span>
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
                                            <span id="father_name_Error"></span>
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
                                            <p for="" class="form-label">Student Class</p>
                                            <input type="text" name="class" id="class" placeholder="Class">
                                            <span id="class_Error"></span>
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
                                    <a onclick="triggerFileInputClick()">
                                        <div class="">
                                            <p for="" class="form-label">Add birth/NID Pdf</p>
                                            <div class="profile_pic">
                                                <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                            </div>
                                            <span id="date_Error"></span>
                                            <input type="file" class="d-none" name="nid_birth_input" id="nid_birth_input" onchange="showPdfImage()">
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
                                <div class="">
                                    <p for="" class="form-label">Add Transfer letter Pdf</p>
                                    <div class="profile_pic">
                                        <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                    </div>
                                    <span id="date_Error"></span>
                                </div>
                            </div>
                            <div class="pdf_sec me-5">
                                <div class="">
                                    <p for="" class="form-label">Add Transfer letter Pdf</p>
                                    <div class="profile_pic">
                                        <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                    </div>
                                    <span id="date_Error"></span>
                                </div>
                            </div>
                            <div class="pdf_sec me-5">
                                <div class="">
                                    <p for="" class="form-label">Add Fathers NID Pdf</p>
                                    <div class="profile_pic">
                                        <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                    </div>
                                    <span id="date_Error"></span>
                                </div>
                            </div>
                            <div class="pdf_sec me-5">
                                <div class="">
                                    <p for="" class="form-label">Add Mothers NID Pdf</p>
                                    <div class="profile_pic">
                                        <img class="upload" src="{{ asset('img/upload.svg') }}" alt="">
                                    </div>
                                    <span id="date_Error"></span>
                                </div>
                            </div>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('script')
    @include('admin.student.internal-assets.js')
<script>

    flatpickr("#date", {
        dateFormat: "d-m-Y",

    });
</script>
@endpush

