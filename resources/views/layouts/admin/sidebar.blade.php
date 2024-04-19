<style>
    .sidebar-sec{
        border-radius: 4px 0px 0px 4px;
        background:  #D9D8D7;
        color: #403E3B;
    }
    .side_items_main{
        padding-left: 65px;
        padding: 8px 44px;
        background: #D9D8D7;
        /* width: 210px; */
        width: 100%;
        color: #403E3B;

    }
    .nav-sidebar>.nav-item .nav-icon {
        margin-left: -20px;
        font-size: 1.2rem;
        margin-right: 0.2rem;
        text-align: center;
        width: 1.6rem;
    }
    .s-active{
        .indecator{
            background:  #403E3B;
            color: #fff !important;
        }
        .side_items_main{
            background:  #403E3B;
            color: #fff !important;
        }
        .nav-icon{
            /* fill: #ff0e0e !important;
             */
             filter: brightness(0) invert(1);
        }
        .sidebar-color{
            color: white;
        }

    }
    .sidebar-color{
        color: var(--Dark-Gray, #403E3B);
        font-family: Lexend;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .sidebar{
        margin: 0px;
        padding: 0px;
    }
    .indecator{
        width: 13px;
        margin-right: 10px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    .nav-sidebar>.nav-item {
        margin-bottom: 5px;
    }
    .nav-icon{

    }
    .user-img{
        width: 90px;
        height: 90px;
        border-radius: 90px;
        border: 5px solid #DAAA00;
        background: url(<path-to-image>), lightgray 50% / cover no-repeat, #D9D9D9;
    }
    .user-name{
        color: #000;
        font-family: Lexend;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .user-type{
        color: #000;
        font-family: Lexend;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .user{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
    .nav-item:hover{
        .indecator{
            background:  #403E3B;
            color: #fff !important;
        }
        .side_items_main{
            background:  #403E3B;
            color: #fff !important;
        }
        .nav-icon{
            /* fill: #ff0e0e !important;
             */
             filter: brightness(0) invert(1);
        }
        .sidebar-color{
            color: white;
        }
    }


</style>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background: #FFF;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user">
        <div class="user-image m-auto w-100 text-center">
            {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2 user-img text-center" alt="User Image"> --}}
        </div>
        <div class="user-info text-center">
            <h4 class="user-name">Ashik Hasan</h4>
            <h5 class="user-type">Super Admin</h5>
        </div>
        <div class="hr">
            <img class="line" src="{{ asset('icon/hr.svg') }}" alt="">
        </div>
      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column w-100" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open  {{ Request::is('dashboard*') ? 's-active' : ''  }}">
            <a href="{{ route('dashboard') }}" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator"></div>
                    <div class="side_items_main sidebar-sec ">
                        <img class="nav-icon " src="{{ asset('icon/Dashboard.svg') }}" alt="">
                        <p class="sidebar-color">
                        Dashboard
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open {{ Request::is('admin/student*') ? 's-active' : ''  }}">
            <a href="{{ route('admin.student.index') }}" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator "></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Student.svg') }}" alt="">
                        <p class="sidebar-color">
                        Student
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator"></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Teacher.svg') }}" alt="">
                        <p class="sidebar-color">
                        Teacher
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator "></div>
                    <div class="side_items_main sidebar-sec ">
                        <img class="nav-icon " src="{{ asset('icon/Campus.svg') }}" alt="">
                        <p class="sidebar-color">
                        Campus
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator "></div>
                    <div class="side_items_main sidebar-sec ">
                        <img class="nav-icon " src="{{ asset('icon/Assets.svg') }}" alt="">
                        <p class="sidebar-color">
                        Asset
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator  "></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Result.svg') }}" alt="">
                        <p class="sidebar-color">
                        Result
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator "></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Account.svg') }}" alt="">
                        <p class="sidebar-color">
                        Account
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator"></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Report.svg') }}" alt="">
                        <p class="sidebar-color">
                        Report
                        </p>
                    </div>
               </div>
            </a>
          </li>
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link" style="padding: 0px;">
               <div class="side_item d-flex">
                    <div class="indecator"></div>
                    <div class="side_items_main sidebar-sec">
                        <img class="nav-icon " src="{{ asset('icon/Configuration.svg') }}" alt="">
                        <p class="sidebar-color">
                        Configuration
                        </p>
                    </div>
               </div>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
