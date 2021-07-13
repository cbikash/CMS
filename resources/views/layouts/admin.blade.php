<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href=" {{asset('admin/assets/css/all.min.css')}} " rel="stylesheet" type="text/css">
     <link href="{{asset('admin/assets/css/css.css')}} " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/assets/css/sb-admin-2.min.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Noto+Sans+JP:wght@100;500&display=swap" rel="stylesheet">
 <script>
    $(document).ready(function(){
    $("#hide-sidebar").click(function(){
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
                   AC POWER
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
            <!-- <hr class="sidebar-divider"> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                   <i class="fas fa-hotdog text-danger"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded">
                        <a class="collapse-item" href=" {{route('product.index')}} ">Products</a>
                        <a class="collapse-item" href=" {{route('product.create')}} ">Add Products</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                   aria-expanded="true" aria-controls="collapseTwo1">
                    <i class="fas fa-car-battery text-success"></i>
                    <span>Service</span>
                </a>
                <div id="collapseTwo1" class="collapse bg-custom" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded">
                        <a class="collapse-item" href=" {{route('service.index')}} ">Services</a>
                        <a class="collapse-item" href=" {{route('service.create')}} ">Add Services</a>
                    </div>
                </div>
            </li>


        </ul>

    </div>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button class="btn btn-custom" id="sidebarToggle"><svg class="btn-font"  xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-text-indent-left" viewBox="0 0 16 16">
                    <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg></i></button>
                    <button class="btn btn-custom" id="hide-sidebar">
                        <svg class="btn-font btn-font2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    </button>


                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                              <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </form>


                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>

                                <span class="badge badge-danger badge-counter">4+</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <i class="fas fa-chevron-down fa-down"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user-tag fa-sm fa-fw mr-2 text-info"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-success"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

                <div class="container-fluid content">



                    <div class="boxes">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="box">

                                    <div class="row">
                                        <div class="col">
                                            <div class="box-header">
                                                <h4>Total Product</h4>
                                            </div>
                                            <div class="box-content">
                                                <p class="text-info">2000</p>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <i class="fas fa-copy icon-box text-info"></i>
                                        </div>
                                    </div>
                                </div>
                          </div>

                          <div class="col-md-4">
                               <div class="box">

                                    <div class="row">
                                        <div class="col">
                                            <div class="box-header">
                                                <h4>Total Product</h4>
                                            </div>
                                            <div class="box-content">
                                                <p class="text-info">2000</p>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <i class="fas fa-copy icon-box text-info"></i>
                                        </div>
                                    </div>
                                </div>
                          </div>

                          <div class="col-md-4">
                               <div class="box">

                                    <div class="row">
                                        <div class="col">
                                            <div class="box-header">
                                                <h4>Total Product</h4>
                                            </div>
                                            <div class="box-content">
                                                <p class="text-info">2000</p>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <i class="fas fa-copy icon-box text-info"></i>
                                        </div>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>
                    @yield('content')





                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bikas chaudhary 2020 (+977 9845969704)</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <!-- Core plugin JavaScript-->
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{asset('admin/assets/js/jquery.easing.min.js')}} "></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/ assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
