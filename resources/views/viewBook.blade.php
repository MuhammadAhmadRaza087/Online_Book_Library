<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Book Store</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="Phoenixcoded" />
        <!-- Favicon icon -->
        <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
    
        <!-- vendor css -->
        <link rel="stylesheet" href="{{url('assets/css/adminStyle.css')}}">
    </head>
<body class="">
	<!-- [ Pre-loader ] start -->
   
   <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{url('assets/images/avatar-2.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>Ahmad</span>
                        <div id="more-details">Admin Panel<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="#!"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="/admin" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Users</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Customer</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{url('/viewCustomer')}}">View Customer</a></li>
                        <li><a href="{{url('/addCustomer')}}">Add Customer</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Books</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{url('/viewBook')}}">View Books</a></li>
                        <li><a href="{{url('/addBook')}}">Add Books</a></li>
                    </ul>
                </li>
            </ul>	
        </div>
    </div>
</nav>
  <!-- [ navigation menu ] end -->
  <!-- [ Header ] start -->
  <header
    class="navbar pcoded-header navbar-expand-lg navbar-light header-dark"
  >
  </header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
              <div class="row align-items-center">
                <div class="col-md-12">
                </div>
              </div>
            </div>
          </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Book Details</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Book Title</th>
                                        <th>Book Author</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as  $index => $book)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$book->title}}</td>
                                        <td>{{$book->author}}</td>
                                        <td>{{$book->price}}</td>
                                        <td>
                                            <a href="{{url('/updateBook/'.$book->id)}}"><button type="button" class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="{{url('/deleteBook/'.$book->id)}}"><button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Hover-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
    <!-- Required Js -->
     <!-- Required Js -->
     <script src="{{url('assets/js/vendor-all.min.js')}}"></script>
     <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{url('assets/js/pcoded.min.js')}}"></script>


</body>
</html>
