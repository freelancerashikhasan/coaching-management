{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
@extends('layouts.admin.app')

@section('content')
    @push('css')
    <style>
        #date_text{
            color: var(--Gray-1, #A5A6A4);
            text-align: right;
            font-family: Lexend;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        #date-input{
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .pageTitle{
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: left !important;
            padding-bottom: 34px;
        }
        .wallets{
            border-radius: 4px;
            padding: 20px;
            background: var(--White, #F2F2F2);
            box-shadow: 8px 8px 25px 0px rgba(64, 62, 59, 0.25);
        }
        .wallet_icon{
          margin: 10px ;
        }
        .wallet_title{
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding-top: 12px;
            text-align: left !important;
        }
        .wallet_balance{
            color: var(--Black, #0D0D0D);
            font-family: Lexend;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: left !important;

        }
        .graph_title{
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align:left !important;

        }
        .graph_des{
            color: var(--Gray-1, #A5A6A4);
            font-family: Lexend;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align:left !important;

        }
        .graph-btn{
            display: flex;
            width: 122px;
            height: 36px;
            justify-content: center;
            align-items: center;
            gap: 17px;
            border-radius: 4px;
            border: 2px solid var(--Dark-Gray, #403E3B);
            background: var(--White, #F2F2F2);
            box-shadow: 0px 0px 12px 0px rgba(64, 62, 59, 0.20);
        }
        .teacher_wallet{
            display: flex;
            padding: 8.362px 16.723px 8.362px 8.362px;
            align-items: center;
            gap: 50px;
            display: flex;
            border-radius: 4px;
            background: var(--White, #F2F2F2);
            box-shadow: 0px 0px 12px 0px rgba(64, 62, 59, 0.20);
            margin-bottom: 12px;
        }
        .t_name{
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 114%;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: left !important;
            margin-bottom: 0px !important;
        }
        .master-admin-dashboard-inner {
            border-radius: var(--br-9xs);
            background-color: var(--color-white);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            text-align: center;
            margin: 20px; /* Add margin for spacing */
        }

        .group-parent {
            width: 100%;
            max-width: 680px; /* Set maximum width */
            margin: auto; /* Center the container */
        }


        .k-parent {
            position: relative;
        }
        .frame-parent2,
        .sat-parent {
            display: flex;
            /* position: absolute;
            justify-content: flex-start; */
        }
        .frame-parent2 {
            top: 327px;
            left: 323px;
            flex-direction: row;
            align-items: center;
            gap: 259px;
            font-size: var(--font-size-xl);
        }
        .active-teachers-parent,
        .sat-parent {
            /* align-items: flex-start; */
        }
        .k-parent {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-start;
            gap: 20px;
        }

        .group-div {
            top: 24px;
            width: 100%;
            height: auto; /* Allow height to adjust based on content */
        }

        .line-parent {
            position: absolute;
            top: 33px;
            left: 5%; /* Adjust left position */
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            gap: 38px;
        }

        .line-div {
            position: relative;
            border-top: 2px dashed var(--white);
            box-sizing: border-box;
            width: 90%; /* Adjust width */
            height: 2px;
        }

        .group-child {
            position: absolute;
            top: 61px;
            left: 10%; /* Adjust left position */
            width: 80%; /* Adjust width */
            height: auto; /* Allow height to adjust based on content */
        }

        .group-div,
        .k-parent {
        position: absolute;
        left: 0;
        }
        .k-parent {
        top: 0;
        display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-start;
            gap: 20px;
        }
        .bdt-parent {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: center;
            gap: 2px;
            color: var(--dark-gray);
        }
        @media (min-width: 1200px){
                .col-xl-2 {
                    flex: 0 0 auto;
                    width: 19.666667% !important;
                }
            }
            @media (max-width: 800px){
                .teacher_sec{
                    margin-block: 200px;
                }
            }

    </style>
    @endpush
   <div class="contaner-fluid">
        <div class="row">

           <div class="content-section">
                <div class="row  m-auto" style="text-align: center;justify-content:space-between !important;">
                    <div class="col-md-6">
                        <h5 class="pageTitle">Dashboard</h5>
                    </div>
                    <div class="col-md-6" style="text-align: right !important;">
                        <h5>
                            <span id="date_text">Date & Time :</span><span id="date-input">1 Jan 2024 -12:30 AM</span>
                        </h5>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6"  style="margin-bottom: 12px;">
                        <div class="wallets w-100">
                            <div class="head d-flex w-100" style="justify-content: space-between;">
                                <span><img class="wallet_icon" src="{{ asset('icon/wallet.svg') }}" alt=""></span>
                                <span><img src="{{ asset('icon/info.svg') }}" alt=""></span>
                            </div>
                            <div class="wallet_des">
                               <h4 class="wallet_title">Today Income</h4>
                               <h3 class="wallet_balance">24.000.00 BDT</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6"  style="margin-bottom: 12px;">
                        <div class="wallets w-100">
                            <div class="head d-flex w-100" style="justify-content: space-between;">
                                <span><img class="wallet_icon" src="{{ asset('icon/wallet.svg') }}" alt=""></span>
                                <span><img src="{{ asset('icon/info.svg') }}" alt=""></span>
                            </div>
                            <div class="wallet_des">
                               <h4 class="wallet_title">Today Income</h4>
                               <h3 class="wallet_balance">24.000.00 BDT</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6"  style="margin-bottom: 12px;">
                        <div class="wallets w-100">
                            <div class="head d-flex w-100" style="justify-content: space-between;">
                                <span><img class="wallet_icon" src="{{ asset('icon/wallet.svg') }}" alt=""></span>
                                <span><img src="{{ asset('icon/info.svg') }}" alt=""></span>
                            </div>
                            <div class="wallet_des">
                               <h4 class="wallet_title">Today Income</h4>
                               <h3 class="wallet_balance">24.000.00 BDT</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6"  style="margin-bottom: 12px;">
                        <div class="wallets w-100">
                            <div class="head d-flex w-100" style="justify-content: space-between;">
                                <span><img class="wallet_icon" src="{{ asset('icon/wallet.svg') }}" alt=""></span>
                                <span><img src="{{ asset('icon/info.svg') }}" alt=""></span>
                            </div>
                            <div class="wallet_des">
                               <h4 class="wallet_title">Today Income</h4>
                               <h3 class="wallet_balance">24.000.00 BDT</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6" style="margin-bottom: 12px;">
                        <div class="wallets w-100">
                            <div class="head d-flex w-100" style="justify-content: space-between;">
                                <span><img class="wallet_icon" src="{{ asset('icon/wallet.svg') }}" alt=""></span>
                                <span><img src="{{ asset('icon/info.svg') }}" alt=""></span>
                            </div>
                            <div class="wallet_des">
                               <h4 class="wallet_title">Today Income</h4>
                               <h3 class="wallet_balance">24.000.00 BDT</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12" style="margin-bottom: 12px;">
                        <div class="row" style="padding-top: 34px;">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <h3 class="graph_title">School Performance</h3>
                                <p class="graph_des">Updating After 1 Hour </p>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-lg-4">
                                <select href="" class="graph-btn form-control select2">
                                    <option value="">This Week</option>
                                    <option value="">This Month</option>
                                    <option value="">This Year</option>
                                </select>
                            </div>
                            <div class="col-10 m-auto mb-3">
                                <div class="master-admin-dashboard-inner">
                                    <div class="group-parent">
                                      <div class="group-div">
                                        <div class="sat-parent" style="    margin-top: 250px;justify-content: space-between; width: 100%;">
                                          <div class="logo">Sat</div>
                                          <div class="logo">Sun</div>
                                          <div class="logo">Mon</div>
                                          <div class="logo">Twi</div>
                                          <div class="logo">Wed</div>
                                          <div class="logo">Thu</div>
                                          <div class="logo">Fri</div>
                                        </div>
                                        <div class="k-parent">
                                          <div class="logo">30k</div>
                                          <div class="logo">25k</div>
                                          <div class="logo">20k</div>
                                          <div class="logo">15k</div>
                                          <div class="logo">10k</div>
                                          <div class="logo">5k</div>
                                        </div>
                                      </div>
                                      <div class="line-parent">
                                        <div class="line-div"></div>
                                        <div class="line-div"></div>
                                        <div class="line-div"></div>
                                        <div class="line-div"></div>
                                        <div class="line-div"></div>
                                        <div class="line-div"></div>
                                      </div>
                                      <img class="group-child" alt="" src="{{ asset('icon/group-4.svg') }}" />

                                      <div class="frame-parent3">
                                        <div class="frame-parent4">
                                          <div class="wrapper">
                                          </div>
                                          <div class="bdt-parent">
                                            <div class="logo">25.000.00 BDT</div>
                                            <div class="dec-2323">22.Dec 2323</div>
                                          </div>
                                        </div>
                                        <img class="group-item" alt="" src="{{asset('icon/polygon-1.svg')}}" />
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 teacher_sec" style="padding-top: 34px;">
                        <h3 class="graph_title">School Performance</h3>
                        <p class="graph_des">Updating After 1 Hour </p>
                        <div class="teacher_wallet d-flex">
                            <div class="t_content d-flex w-100"  style="justify-content: space-between;">
                                <div style="" style="padding-right: 10px !important;">
                                    <img src="{{ asset('img/student.png') }}" alt="" style="border-radius: 3.345px;">
                                </div>
                                <div class="d-flex">
                                    <div style=" text-center">
                                        <div class="t_name d-flex" style="justify-content: space-between;"><div>Class: 09</div><div>Bangla 1st</div></div>
                                        <p class="t_name">Time: 10:30 AM-11:15 AM </p>
                                        <p class="t_name">Mohammad Ruhul Amin</p>
                                    </div>
                                </div>
                                <div class="t_info">
                                    <img src="{{ asset("icon/info.svg") }}" alt="" style="padding-top: 15px; padding-right: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="teacher_wallet d-flex">
                            <div class="t_content d-flex w-100"  style="justify-content: space-between;">
                                <div style="" style="padding-right: 10px !important;">
                                    <img src="{{ asset('img/student.png') }}" alt="" style="border-radius: 3.345px;">
                                </div>
                                <div class="d-flex">
                                    <div style=" text-center">
                                        <div class="t_name d-flex" style="justify-content: space-between;"><div>Class: 09</div><div>Bangla 1st</div></div>
                                        <p class="t_name">Time: 10:30 AM-11:15 AM </p>
                                        <p class="t_name">Mohammad Ruhul Amin</p>
                                    </div>
                                </div>
                                <div class="t_info">
                                    <img src="{{ asset("icon/info.svg") }}" alt="" style="padding-top: 15px; padding-right: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="teacher_wallet d-flex">
                            <div class="t_content d-flex w-100"  style="justify-content: space-between;">
                                <div style="" style="padding-right: 10px !important;">
                                    <img src="{{ asset('img/student.png') }}" alt="" style="border-radius: 3.345px;">
                                </div>
                                <div class="d-flex">
                                    <div style=" text-center">
                                        <div class="t_name d-flex" style="justify-content: space-between;"><div>Class: 09</div><div>Bangla 1st</div></div>
                                        <p class="t_name">Time: 10:30 AM-11:15 AM </p>
                                        <p class="t_name">Mohammad Ruhul Amin</p>
                                    </div>
                                </div>
                                <div class="t_info">
                                    <img src="{{ asset("icon/info.svg") }}" alt="" style="padding-top: 15px; padding-right: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="teacher_wallet d-flex">
                            <div class="t_content d-flex w-100"  style="justify-content: space-between;">
                                <div style="" style="padding-right: 10px !important;">
                                    <img src="{{ asset('img/student.png') }}" alt="" style="border-radius: 3.345px;">
                                </div>
                                <div class="d-flex">
                                    <div style=" text-center">
                                        <div class="t_name d-flex" style="justify-content: space-between;"><div>Class: 09</div><div>Bangla 1st</div></div>
                                        <p class="t_name">Time: 10:30 AM-11:15 AM </p>
                                        <p class="t_name">Mohammad Ruhul Amin</p>
                                    </div>
                                </div>
                                <div class="t_info">
                                    <img src="{{ asset("icon/info.svg") }}" alt="" style="padding-top: 15px; padding-right: 10px;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
           </div>

        </div>
   </div>
@endsection
