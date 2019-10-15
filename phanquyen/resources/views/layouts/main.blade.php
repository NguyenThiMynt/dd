<!DOCTYPE HTML>
<html>
<head>
    <title>trang chủ</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css/fontawesome.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('backend/css/all.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('backend/js/main.js')}}}" type="text/css"></script>
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
</head>
<body>


<div class="main">
    <div id="sidenav">
        <div class="main-header">
            <div class="logo">
                <a href="#">Dashboard</a>
                <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
            </div>
            <aside class="menu">
                <ul>
                    <div class="user-panel">
                        <div class="float-left image">
                            <img src="{{asset('backend/image/anhdaidien.jpg')}}" class="rounded-circle" width="50px" style="margin: 0 24px;">
                        </div>
                        <div class=" info">
                            <p style="color: #ffffff;font-weight: bold; margin-bottom: 0px;">Admin</p>
                            <i class="fa fa-circle text-success">Online</i>
                        </div>
                    </div>
                    <div class="search">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <li class="active"><a href="#"><i class="fas fa-home"> Home</i></a></li>
                    <!-- If login as admin -->
                    <li>
                        <a href="#"><i class="fa fa-user"> My Account</i></a>
                        <ul>
                            <li class="dropdown dropdown-toggle" data-toggle="dropdown">
                                <a href="#"><i class="fab fa-product-hunt"> Product portfolio</i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"> Fashion</i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"> Electronic device</i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-running"> Sport</i></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fas fa-comment-alt"> Comments</i></a></li>
                            <li><a href="#" ><i class="fa fa-shopping-cart"> Categories</i></a></li>
                            <li><a href="#"><i class="fas fa-newspaper"> Create New Post</i></a></li>
                        </ul>
                    </li>
                    <!-- End If login as admin -->
                    <li><a href="#">About Us</a></li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"> Category</i></a>
                        <ul>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">Images</a></li>
                            <li><a href="#">Galleries</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Links</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-address-card"> Contact Us</i></a></li>
                    <li><a href="#" class="logout">Login</a></li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light py-0" style="background-color: #3c8dbc;">
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby = "navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img class="rounded-circle" src="{{asset('backend/image/anhdaidien.jpg')}}" style="width: 30px;" alt="user-image" > <span class="pl-2">American</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <a href="#">
                                <img src="{{asset('backend/image/anhdaidien.jpg')}}" alt="user-image" style="padding: 0px 5px;">
                                <p style="text-align: center;color: #343a40;margin-bottom: 0px;">American-General Shop</p>
                                <small style="padding: 40px;color: #343a40; ">Member since no. 2019</small>
                            </a>
                        </li>
                        <li class="user-body" style="text-align: center;height: 40px; background-color: #f9f9f9; padding: 10px; margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#" style="padding-left: 5px; color: #343a40;">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#" style="padding: 38px; color: #343a40;">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#" style=" color: #343a40;">Friends</a>
                                </div>
                            </div>
                        </li>
                        <li class="user-footer" >
                            <div class="fa-pull-left">
                                <a href="#" class="btn btn-default btn-light">Profile</a>
                            </div>
                            <div class="fa-pull-right">
                                <a href="#" class="btn btn-default btn-light">Sign out</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="pl-3"><a href="#" ><i class="fa fa-cogs" aria-hidden="true"></i></a></div>

            </nav>
    </div>
</div>
</body>
</html>
