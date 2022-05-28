@extends('layouts.dashboard')
@section('content')

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/jqvmap/dist/jqvmap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('assets_admin/images/logonew1.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ Route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Admin</h3><!-- /.menu-title -->                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/kategori') }}">Kategori</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/produk') }}">Produk</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/courier') }}"">Kurir</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/discount') }}"">Discount</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('/admin/transaction') }}"">Transaction</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/detail') }}"">Detail</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('assets_admin/images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="./"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
{{-- @extends('layouts.template')
@section('content') --}}
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">{{ Auth::user()->admin_name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- table produk -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><strong>Produk</strong></h4>
                            <div class="card-tools">
                                {{-- <a href="/produk" class="btn btn-sm btn-danger">
                      More
                    </a> --}}
                            </div>
                        </div>
        
                        <div class="container-fluid">
                            <h5>{{ $product->produk_name }}</h5>
                                                    @if (!$product->product_review->count())
                                                        <div class="d-flex justify-content-center">    
                                                        <div class="row mb-5 mt-3">
                                                            <p><strong>Belum ada review produk.</strong></p> 
                                                        </div>
                                                        </div>
                                                    @else
                                                        <h4 class="mt-3" >Review Produk</h4>
                                                        @foreach ($product->product_review as $item)
                                                        <!-- First row -->
                                                        <div class="row mb-3 ml-5 mt-3">
                                            
                                                            <!-- Content column -->
                                                            <div class="col-sm-12 col-12">
                                            
                                                            <a>
                                                                <h6 style="color:#333333" class="user-name">{{$item->user->user_name}}
                                                                    <p><i class="far fa-clock-o"></i> {{$item->created_at}}</p>
                                                                </h6>
                                                            </a>
                                            
                                                            <!-- Rating -->
                                                            <ul class="rating">
                                                                @for ($i = 0; $i < $item->rate; $i++)
                                                                <a>
                                                                    <i class="fas fa-star blue-text" style="color:#FFD700"></i>
                                                                </a>
                                                                @endfor
                                                            </ul>
                                                            <input type="hidden" class="rate{{$loop->iteration-1}}" value="{{$item->rate}}">
                                                            <input type="hidden" class="content{{$loop->iteration-1}}" value="{{$item->content}}">
                                                            <input type="hidden" class="review_id{{$loop->iteration-1}}" value="{{$item->id}}">
                                            
                                                            <p class="dark-grey-text article">{{$item->content}}</p>
                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateBarang{{ $item->id }}">Balas</button>
                                                                    <!-- Modal Update Barang-->
                                                                        <div class="modal inmodal fade" id="modalUpdateBarang{{ $item->id }}" tabindex="-1" aria-labelledby="modalUpdateBarang" aria-hidden="true">
                                                                            <div class="modal-dialog modal-xs">
                                                                                <form action="{{route('respons', $item->id)}}" method="post">
                                                                                @csrf
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Review Produk</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="form-group"><label class="col-lg-3 control-label">Review</label>
                                                                                            <ul class="rating">
                                                                                                @for ($i = 0; $i < $item->rate; $i++)
                                                                                                <a>
                                                                                                    <i class="fas fa-star blue-text" style="color:#FFD700"></i>
                                                                                                </a>
                                                                                                @endfor
                                                                                                <p class="">{{ $item->content }}</p>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="form-group"><label class="col-lg-2 control-label">Pesan</label>
                                                                                            <div class="col-lg-12"><textarea  type="text" name="content" placeholder="Pesan" class="form-control" rows="3" required></textarea></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                                                    </div>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    
                                            
                                                            </div>
                                                            <!-- Content column -->
                                            
                                                        </div>
                                                        <!-- First row -->
                                                        @if ($item->response->count())
                                                            <!-- Balasan -->
                                                            @foreach ($item->response as $balasan)
                                                            <div class="row mb-5" style="margin-left: 50%">
                                                            
                                                            <!-- Image column -->
                                        
                                                            <!-- Content column -->
                                                            <div class="col-sm-10 col-12">
                                        
                                                                <a>
                                        
                                                                <h6 style="text-align: right">Admin</h6>
                                                                <h6 style="text-align: right"><strong>
                                                                    {{$balasan->admin->admin_name}}</strong>
                                                                </h6>
                                                                <h6 style="text-align: right"> {{$balasan->created_at}} <i class="far fa-clock-o"></i></p>
                                        
                                                                </a>
                                                                <!-- Rating -->
                                        
                                                                <p class="dark-grey-text article" style="text-align: right">{{$balasan->content}}</p>
                                        
                                                            </div>
                                                            <!-- Content column -->
                                        
                                                            </div>
                                        
                                                            @endforeach
                                                            <!-- Balasan -->
                                        
                                                        @endif
                                                            
                                                        @endforeach
                                            
                                                    @endif
                            </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        </div>
{{-- @endsection         --}}
<script src="{{ asset('assets_admin/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/main.js') }}"></script>


        <script src="{{ asset('assets_admin/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets_admin/js/widgets.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

    </body>

    </html>
@endsection