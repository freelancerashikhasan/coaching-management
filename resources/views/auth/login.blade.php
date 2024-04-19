<x-guest-layout>
    <style>
        *{
            font-family: 'Lexend', sans-serif;

        }
        .content{
            /* background: url('{{ asset("img/loginpage.png") }}'); */
            height: 1000px;
            width: 100% !important;
            background-size: cover;
        }
        #img{
            width: 100%;
            height: 600px;
        }
        .log_sec h4{
            color: #00B2FF;

            font-family: 'Lexend', sans-serif;
            font-size: 22px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-top: 100px;
        }
        .log_sec p{
            color: #4B4B4B;

            font-family: 'Lexend', sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .input-group{
            display: flex;
            width: 333px;
            height: 52px;
            align-items: center;
            gap: 180px;
        }
        #img{
            width: 100%;
            height: 80%;
        }
        #text{
            border-radius: 4px;
            border: 2px solid #00B2FF;
            background: #FFF;
            box-shadow: 0px 0px 8px 0px rgba(0, 178, 255, 0.25);
            width: 100%;
            height: 40px;
            background-color: transparent;
        }
        #text::placeholder{
            color: #00B2FF;
            font-weight: bolder;

        }
        .input-group{
            position: relative;
        }
        .icon{
            position: absolute;
            top: 16px;
            right: 10px;
        }
        #check{
            border: 2px solid #00B2FF;
        }
        .check_text{
            color: #00B2FF;
            font-weight: 600;
        }
        #submit{
            background-color: #00B2FF;
            color: white;
            font-weight: 600;
            width: 100%;
        }
    </style>
    <div class="content">
        <div class="row pt-3 text-left" style="justify-content: center !important;">
            <div class="col-lg-10 col-sm-12 col-md-12 col-xl-8  m-auto">
                {{-- <div class="card d-flex m-4" style="border-radius: 20px;margin-top:100px !important;"> --}}

                    <div class="row p-3" style="margin-top: 200px;">

                        <div class="col-md-6">
                            <img src="{{ asset('img/login_page.png') }}" alt="" style="margin-right: 100px;width:100%;">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 log_sec">
                            <x-validation-errors class="mb-4" />  <x-validation-errors class="mb-4" />
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6  m-auto mb-3">

                                    <h4> Welcome to Coaching</h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, praesentium.</p>
                                        <div class="form" style="margin-top:50px;">
                                            <div class="mb-3 input-group d-flex">
                                                <img class="icon" src="{{ asset('img/user.svg') }}" alt="">
                                                <input type="text" class="form-control" name="email" id="text" placeholder="Username">
                                            </div>
                                            <div class="mb-3 input-group">
                                                <img class="icon" src="{{ asset('img/seen.svg') }}" alt="">
                                                <input type="password" class="form-control" name="password" id="text" placeholder="Password">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="check">
                                                <label class="form-check-label check_text" >Remember Me</label>
                                            </div>
                                            <div class="mb-3 input-group">
                                                <input type="submit" class="form-control" id="submit">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                {{-- </div> --}}
            </div>
        </div>
    </div>


</x-guest-layout>
