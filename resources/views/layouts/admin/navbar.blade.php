

<style>
    .setting-icon {
        position: relative;
        width: 21px;
        height: 23px;
    }
    .messgae {
        background-color: var(--white);
        box-shadow: 0 0 18px rgba(0, 0, 0, 0.18);
        width: 51px;
        height: 53px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
    .logout-icon,
    .notification-icon {
        position: relative;
        width: 19px;
        height: 23px;
    }
    .logout-icon {
        width: 25px;
        height: 27px;
    }
    .add_btn{
        display: inline-flex;
        text-align: right;
        height: 52px;
        padding: 0px 30px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        border-radius: 4px;
        background: var(--Dark-Gray, #403E3B);
        color: var(--White, #F2F2F2);
        font-family: Lexend;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        position: absolute !important;
        left: 66% !important;
        text-decoration: none !important;
    }
    .add_btn:hover{
        color: #fff;
    }
    @media (max-width: 768px) {
            /* Additional styles for smaller devices */

        .navbar-nav {
            flex-direction: row-reverse;
            align-items: center;
        }
        .navbar-toggler-right {
            margin-right: auto !important; /* Move the toggle button to the right */
            position: absolute;
            right: 0 !important;
        }


        .navbar-collapse {
            justify-content: center;
            background-color: transparent; /* Background color for the collapsed menu */
        }
        .nav-item{
            margin-top:30px !important;
            margin-left:5px !important;
        }
        .add_btn{
            position: absolute !important;
            left: 23% !important;
        }
    }
    @media (max-width:1300px){
        .add_btn{
            position: absolute !important;
            left: 23% !important;
        }
    }
</style>

<nav class="main-header navbar navbar-expand-md navbar-white navbar-light" style="height: 70px; background-color: #FFF;">
    <a class="nav-link sidebar-icon" data-widget="pushmenu" href="#" role="button"><img src="{{ asset('icon/3bars.svg') }}" alt=""></i></a>
    <button style="position: absolute;right: 20px !important;" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        @if (Request::is('admin/student'))
            <a type="button" href="{{ route('admin.student.create') }}" class="add_btn"  id="addStudentBtn">
                <img class="setting-icon"  alt="" src="{{ asset('icon/Add Student.svg') }}" />
                Add New Student
            </a>
        @endif

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto" style="margin-top: -30px !important;">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <div class="messgae">
                        <img class="setting-icon" alt="" src="{{ asset('icon/Setting.svg') }}" />
                    </div>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <div class="messgae">
                        <img
                        class="notification-icon"
                        alt=""
                        src="{{ asset('icon/Notification.svg') }}"
                        />
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <div class="messgae">
                        <img class="setting-icon" alt="" src="{{ asset('icon/Sent.svg') }}" />
                    </div>
                </a>
            </li>
            <li class="nav-item ">
                <form action="{{ route('logout') }}" method="POST" class="nav-link" >
                    @csrf
                <button style="border: none !important;background-color:transparent;">
                    <div class="messgae">
                        <img class="logout-icon" alt="" src="{{ asset('icon/Logout.svg') }}" />
                    </div>
                </button>
                </form>
            </li>
        </ul>
    </div>
  </nav>

<script src="path/to/bootstrap.bundle.min.js"></script>

