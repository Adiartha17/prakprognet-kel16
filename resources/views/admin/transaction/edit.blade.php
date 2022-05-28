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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('js/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{ asset('fancyapps/lib/jquery-1.10.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fancyapps/source/jquery.fancybox.js?v=2.1.5') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('fancyapps/source/jquery.fancybox.css?v=2.1.5') }}" media="screen">

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
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Logistik</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/kategori') }}">Kategori</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/produk') }}"">Produk</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/courier') }}"">Kurir</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ URL::to('admin/detail') }}"">Detail</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
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
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><strong>Transaction</strong></h4>
                </div>
                <div class="container-fluid">
                    <section class="product-page ml-5 mr-5 pb-3 pt-2">
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <div class="row-md-13">
                                    <div class="card mb-4 shadow-sm">
                                        <div class="row ml-3 mt-4 mb-3">
                                            <h6>Pembeli: {{ $transaksi->user->user_name }} </h6>
                                            <h6>Alamat: {{ $transaksi->address }}</h6>
                                            <h6>Pengirim: {{ $transaksi->courier->courier }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 shadow-sm">
                                        <div class="table-responsive-sm">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <td>Produk Dipesan</td>
                                                        <td>Nama</td>
                                                        <td>Harga Satuan</td>
                                                        <td>Jumlah</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transaksi->transaction_detail as $item)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ \Storage::url($item->product->images[0]->image_name) }}"
                                                            class="img-fluid" alt=" {{ $item->product->produk_name }}" width="50">
                                                        </td>
                                                        <td>{{ $item->product->produk_name }}</td>
                                                        <td>Rp. {{ number_format($item->selling_price) }}</td>
                                                        <td align="center">{{ $item->qty }}</td>
                                                    </tr>       
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <table width="1000px" class="col ml-3 mt-4 mb-3" style="border-collapse: collapse; border: none;">
                                        <tr>
                                        @if ($transaksi->status == 'unpaid' && $transaksi->timeout > date('Y-m-d H:i:s'))
                                            @php
                                                date_default_timezone_set("Asia/Makassar");
                                                $date1 = new DateTime($transaksi->timeout);
                                                $date2 = new DateTime(date('Y-m-d H:i:s'));
                                                $tenggat = $date1->diff($date2);
                                            @endphp
                                                <span class="badge badge-danger center mt-3 ml-3 mr-3">Sisa Waktu Pembayaran: {{$tenggat->h}} Jam, {{$tenggat->i}} Menit</span>
                                        @endif
                                        </tr>
                                        <tr>
                                            <td>Total Harga:</td>
                                            <td>Rp.{{ number_format($transaksi->total) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ongkos Kirim:</td>
                                            <td>Rp.{{ number_format($transaksi->shipping_cost) }}</td>
                                        </tr>
                                        <tr>
                                            <td>SubTotal:</td>
                                            <td>Rp.{{ number_format( $transaksi->sub_total ) }}</td>
                                        </tr>
                                        
                                    </table>
                                    <div class="col mt-3 mb-4">
                                        @if($transaksi->status == 'unverified')
                                        <form action="{{route('verified')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <h6 align="center">Bukti Pembayaran</h6>
                                            <input type="hidden" name="id" value="{{$transaksi->id}}">
                                            <a href="{{ \Storage::url($transaksi->proof_of_payment) }}" class="perbesar" target="_blank">
                                            <img src="{{ \Storage::url($transaksi->proof_of_payment) }}" alt="proof_of_payment" class="media-avatar rounded" width="100%" >
                                            </a>
                                            <input type="hidden" name="status" value="verified">
                                            <h6 align="center">Menunggu Verifikasi</h6> 
                                            <button type="submit" class="btn btn-primary btn-block mt-2">Verified</button>
                                        </form>
                                        @endif
                                        @if($transaksi->status == 'verified')
                                        <form action="{{route('kirim')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <h6 align="center">Bukti Pembayaran</h6>
                                            <a href="{{ \Storage::url($transaksi->proof_of_payment) }}" class="perbesar" target="_blank">
                                                <img src="{{ \Storage::url($transaksi->proof_of_payment) }}" alt="proof_of_payment" class="media-avatar rounded" width="100%" >
                                            </a>
                                            <h6 align="center">Pembayaran Sudah Terverifikasi</h6>
                                            <input type="hidden" name="status" value="delivered">
                                            <input type="hidden" name="id" value="{{$transaksi->id}}">
                                            <button type="submit" class="btn btn-primary btn-block mt-2">Kirim Barang</button>
                                        </form>
                                        @endif
                                        @if($transaksi->status == 'finish')
                                        <h6 align="center">Bukti Pembayaran</h6>
                                            <a href="{{ \Storage::url($transaksi->proof_of_payment) }}" class="perbesar" target="_blank">
                                                <img src="{{ \Storage::url($transaksi->proof_of_payment) }}" alt="proof_of_payment" class="media-avatar rounded" width="100%" >
                                            </a>
                                        <h6 align="center">Barang Telah Sampai</h6> 
                                        @endif
                                        @if($transaksi->status == 'expired')
                                            <h6 align="center">Batas Waktu Pembayaran Telah Habis</h6>
                                        @endif
                                        @if($transaksi->status == 'canceled')
                                            <h6 align="center">Pesanan Dibatalkan</h6>
                                        @endif
                                        @if($transaksi->status == 'unpaid')
                                            <h6 align="center">Menunggu Pembayaran</h6>
                                        @endif
                                        @if($transaksi->status == 'delivered')
                                            <h6 align="center">Bukti Pembayaran</h6>
                                            <a href="{{ \Storage::url($transaksi->proof_of_payment) }}" class="perbesar" target="_blank">
                                                <img src="{{ \Storage::url($transaksi->proof_of_payment) }}" alt="proof_of_payment" class="media-avatar rounded" width="100%" >
                                            </a>
                                            <h6 align="center">Barang Sedang Dikirim</h6>
                                        @endif
                                            <a href="/admin/transaction" class="btn btn-outline-primary btn-block mt-2">Kembali</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

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