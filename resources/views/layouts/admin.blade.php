<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CMS</title>
    <link rel="icon" href="{{asset('admin/logo_small.jpg')}}" />
    <!-- Custom fonts for this template-->
    <link href=" {{asset('admin/assets/css/all.min.css')}} " rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/css.css')}} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/assets/css/sb-admin-2.min.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Noto+Sans+JP:wght@100;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.11.2,npm/fullcalendar@5.11.2/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.11.2/main.min.css,npm/fullcalendar@5.11.2/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <script>
        $(document).ready(function() {
            $("#hide-sidebar").click(function() {
                $(".side-barhide").toggle();
            });

        });
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="side-barhide">
            <!-- Sidebar -->
            <ul class="navbar-nav sidebar accordion nav-custom" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                    <div class="sidebar-brand-icon ">
                        CMS
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-fw fa-tachometer-alt text-info icon-nav"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('message.index')}}">
                        <i class="fas fa-envelope text-primary icon-nav"></i>
                        <span>Message</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('enquiry.index')}}">
                        <i class="fas fa-inbox text-secondary icon-nav"></i>
                        <span>Enquiry</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('event.index')}}">
                        <i class="fas fa-book text-info icon-nav"></i>

                        <span>Event</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('image.index')}}">
                        <i class="fa fa-solid fa-file-image icon-nav"></i>
                        <span>Media</span></a>
                </li>
                <!-- <hr class="sidebar-divider"> -->
                 <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoc"
                 aria-expanded="true" aria-controls="collapseTwo1">
                 <i class="fas fa-angle-double-right text-info"></i>
                 <span>Category</span>
                 </a>
                 <div id="collapseTwoc" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="py-2 collapse-inner rounded">
                 <a class="collapse-item" href=" {{route('category.index')}} ">Category</a>
                 <a class="collapse-item" href=" {{route('category.create')}} ">Add Category</a>
                 </div>
                 </div>
                 </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-hotdog text-danger"></i>
                        <span>Courses</span>
                    </a>
                    <div id="collapseTwo" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('product.index')}} ">Courses</a>
                            <a class="collapse-item" href=" {{route('product.create')}} ">Add Course</a>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item">--}}
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"--}}
                {{-- aria-expanded="true" aria-controls="collapseTwo1">--}}
                {{-- <i class="fas fa-car-battery text-success"></i>--}}
                {{-- <span>Service</span>--}}
                {{-- </a>--}}
                {{-- <div id="collapseTwo1" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                {{-- <div class="py-2 collapse-inner rounded">--}}
                {{-- <a class="collapse-item" href=" {{route('service.index')}} ">Services</a>--}}
                {{-- <a class="collapse-item" href=" {{route('service.create')}} ">Add Services</a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </li>--}}

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoab" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-secondary"></i>
                        <span>About</span>
                    </a>
                    <div id="collapseTwoab" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('about.index')}} ">About</a>
                            <a class="collapse-item" href=" {{route('about.create')}} ">Add About</a>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item">--}}
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoman"--}}
                {{-- aria-expanded="true" aria-controls="collapseTwo1">--}}
                {{-- <i class="fas fa-angle-double-right text-primary"></i>--}}
                {{-- <span>Manufacture</span>--}}
                {{-- </a>--}}
                {{-- <div id="collapseTwoman" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                {{-- <div class="py-2 collapse-inner rounded">--}}
                {{-- <a class="collapse-item" href=" {{route('manufacture.index')}} ">Manufacture</a>--}}
                {{-- <a class="collapse-item" href=" {{route('manufacture.create')}} ">Add Manufacture Product</a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </li>--}}

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefaq" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-primary"></i>
                        <span>Faq</span>
                    </a>
                    <div id="collapsefaq" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('faq.index')}} ">Faq</a>
                            <a class="collapse-item" href=" {{route('faq.create')}} ">Add Faq</a>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item">--}}
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#project"--}}
                {{-- aria-expanded="true" aria-controls="collapseTwo1">--}}
                {{-- <i class="fas fa-angle-double-right text-primary"></i>--}}
                {{-- <span>Project</span>--}}
                {{-- </a>--}}
                {{-- <div id="project" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                {{-- <div class="py-2 collapse-inner rounded">--}}
                {{-- <a class="collapse-item" href=" {{route('project.index')}} ">Project</a>--}}
                {{-- <a class="collapse-item" href=" {{route('project.create')}} ">Add Project</a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </li>--}}

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-info"></i>
                        <span>Blog</span>
                    </a>
                    <div id="collapseblog" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('blog.index')}} ">Blog</a>
                            <a class="collapse-item" href=" {{route('blog.create')}} ">Add Blog</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoneslider" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-danger"></i>
                        <span>Slider</span>
                    </a>
                    <div id="collapseoneslider" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('slider.index')}} ">Slider</a>
                            <a class="collapse-item" href=" {{route('slider.create')}} ">Add Slider</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoneplaces" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-danger"></i>
                        <span>Places</span>
                    </a>
                    <div id="collapseoneplaces" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('places')}} ">Places</a>
                            <a class="collapse-item" href=" {{route('places.create')}} ">Add Places</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#oneteam" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-secondary"></i>
                        <span>Team</span>
                    </a>
                    <div id="oneteam" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('team.index')}} ">Team</a>
                            <a class="collapse-item" href=" {{route('team.create')}} ">Add Team</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclient" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-primary"></i>
                        <span>Client</span>
                    </a>
                    <div id="collapseclient" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('client.index')}} ">Client</a>
                            <a class="collapse-item" href=" {{route('client.create')}} ">Add Client</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetestimonial" aria-expanded="true" aria-controls="collapseTwo1">
                        <i class="fas fa-angle-double-right text-info"></i>
                        <span>Testimonial</span>
                    </a>
                    <div id="collapsetestimonial" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded">
                            <a class="collapse-item" href=" {{route('testimonial.index')}} ">Testimonial</a>
                            <a class="collapse-item" href=" {{route('testimonial.create')}} ">Add Testimonial</a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button class="btn btn-custom" id="sidebarToggle"><svg class="btn-font" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-text-indent-left" viewBox="0 0 16 16">
                            <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg></i></button>
                    <button class="btn btn-custom" id="hide-sidebar">
                        <svg class="btn-font btn-font2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                        </svg>
                    </button>




                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                              <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </form> --}}


                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                @if(count(auth()->user()->unreadNotifications) != 0)
                                <span class="badge badge-danger badge-counter">{{count(auth()->user()->unreadnotifications)}}+</span>
                                @endif
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>

                                @if(count(auth()->user()->unreadNotifications) != 0)

                                <a href="{{route('admin.read.notification')}}" class="dropdown-item d-flex align-items-center text-success">Mark as All read</a>


                                @foreach(auth()->user()->unreadNotifications as $notification)


                                <a class="dropdown-item d-flex align-items-center" href="
                                     @if ($notification->data['notification_type'] == " Message") {{route('message.show',$notification->data['notification_id'])}} @else {{route('enquiry.show',$notification->data['notification_id'])}} @endif">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="small text-gray-500">{{$notification->created_at->diffForHumans()}}</div>
                                        <span class="font-weight-bold">{{$notification->data['name']}} has send {{$notification->data['notification_type']}}!</span>
                                    </div>
                                </a>
                                @endforeach

                                <a class="dropdown-item text-center small text-gray-500" href="{{route('enquiry.index')}}">Show All Alerts</a>
                                @else

                                <a class="dropdown-item text-center  text-gray-500" href="#">No any Notification Available</a>

                                @endif
                                {{--




                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> --}}
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <i class="fas fa-chevron-down fa-down"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user-tag fa-sm fa-fw mr-2 text-info"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-success"></i>
                                    Profile
                                </a>

                                <!-- Button trigger modal -->
                                <a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-success"></i>
                                    Change Password
                                </a>



                                <div class="dropdown-divider"></div>


                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                </nav>

                <style>
                    .page-header-default {
                        margin: 0;
                        border: none;
                        box-shadow: none;
                        background-color: #eaf0f7;
                        /* padding: 15px 0 12px; */
                        padding: 15px 20px;
                    }

                    .page-heading {
                        position: relative;
                        border-top-right-radius: 3px;
                        border-top-left-radius: 3px;
                        padding: 0px 0px 0 20px;
                        margin-bottom: 0;
                        font-family: 'Poppins', sans-serif;
                        font-weight: 500;
                        font-size: 14px;
                        background: transparent;
                        border-left: 3px solid #4375ba;
                        border-radius: 0;
                    }

                    h2.panel-title,
                    .h2.panel-title {
                        font-size: 23px;
                    }

                    .page-header-default .breadcrumb-line:not([class*=bg-]) {
                        background-color: transparent;
                        border: none;
                    }

                    .text-size-small {
                        font-size: 12px;
                    }

                    .text-muted {
                        color: #999999;
                    }

                    @media (min-width: 769px) {
                        .breadcrumb-elements {
                            margin-top: -40px;
                        }
                    }

                    @media (min-width: 769px) {
                        .breadcrumb-elements {
                            float: right;
                            text-align: inherit;
                            border-top: 0;
                        }
                    }

                    .breadcrumb-elements {
                        text-align: center;
                        margin-top: -30px;
                        padding: 0;
                        list-style: none;
                        border-top: 1px solid #ddd;
                        font-size: 0;
                    }

                    @media (min-width: 769px) {

                        .breadcrumb-elements>li,
                        .breadcrumb-elements>li .btn-group {
                            position: relative;
                        }
                    }

                    @media (min-width: 769px) {
                        .breadcrumb-elements>li {
                            float: left;
                        }
                    }

                    .breadcrumb-elements>li {
                        display: inline-block;
                        position: static;
                        font-size: 13px;
                    }

                    .breadcrumb-elements>li>a {
                        color: #fff;
                        padding: 7px 10px;
                        border-radius: 3px;
                        background-color: #e7f0ff;
                        color: #fff;
                        font-weight: normal;
                        /* border: 1px solid #d6d6d6; */
                        background: linear-gradient(#6da6f7, #004fbd);
                    }
                </style>

                <div class="container-fluid content">
                    <!-- <div class="page-header page-header-default">
                        <div class="page-heading clearfix">
                            <h2 class="panel-title" style="margin-bottom:5px;">
                                Program
                                <span class="text-muted text-size-small"> Batch </span>
                            </h2>
                        </div>
                        <div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
                            <ul class="breadcrumb-elements">
                                <li>
                                    <a href="/report/generate/program/excel-report"> <i class="icon-file-excel position-left"></i>Export Excel</a>
                                </li>
                            </ul>
                        </div>

                    </div> -->
                    <hr style="border-bottom: 1px solid #f9f9f9; border-top: 1px solid #dedede;margin-top: 0;">
                    @yield('content')
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bikas chaudhary {{\Carbon\Carbon::now()->format('Y') }} (+977 9845969704)</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-Top" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Old password">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Re-Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('admin/assets/js/jquery.easing.min.js')}} "></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/ assets/js/sb-admin-2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('scripts')
</body>

</html>
