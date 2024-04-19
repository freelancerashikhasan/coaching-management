@extends('layouts.admin.app')
@section('content')
    <style>
        .leatest{
            color: var(--Dark-Gray, #403E3B);
            font-family: 'Lexend', sans-serif;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .student-card{
            border-radius: 4px;
            background: var(--White, #F2F2F2);
            box-shadow: 0px 0px 15.051px 0px rgba(64, 62, 59, 0.25);
        }
        span{
            font-family: 'Lexend', sans-serif;
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 100%;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

    </style>
    <div class="section">
        <div class="row">
            <h5 class="leatest">Our Leatest Student</h5>

            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  mt-2">
                <div class="student-card d-flex p-2">
                    <div class="w-25">
                        <img style="margin: 10px;" src="{{ asset('img/student.png') }}" alt="">
                    </div>
                    <div class="w-50">
                        <span>Mohammad Ruhul Amin</span>
                        <span style="justify-content: space-between;"><span>Class: 07</span><span  style="padding-left:20px;">Roll: 16</span></span>
                        <span style="text-align: center;">ID: 12456TYUI</span>
                    </div>
                    <div class="w-25 text-center" style="justify-content: center !important;margin-top:20px;">
                        <img src="{{ asset('icon/student3dot.svg') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

