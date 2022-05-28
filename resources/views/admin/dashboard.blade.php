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

    {{-- test --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $title }}</title>

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
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script type="text/javascript">
        $(document).ready(function(){
          setInterval(() => {
            var dt = new Date();
            // $("#autodiv").text(dt.getSeconds());
            $("#lonceng_active").load(location.href + " #lonceng");
            $("#notif_admin_active").load(location.href + " #notif_admin");
          }, 1000);
        });
      </script>

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
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

                        <ul class="navbar-nav  justify-content-end me-sm-4">   
                            @php $admin_unRead = App\Models\AdminNotification::where('notifiable_id',Auth::user()->id)->where('read_at', NULL)->orderBy('created_at','desc')->count(); @endphp         
                              <li id="test" class="nav-item dropdown d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0" id="dropdownProfileButton" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="d-none">
                                    <div id="lonceng">
                                      <i class="fa fa-bell me-sm-1"></i>
                                      <span class="badge bg-danger">{{$admin_unRead}}</span>
                                      <span class="d-sm-inline d-none"></span>
                                    </div>
                                  </div>
                                  <div id="lonceng_active">
                    
                                  </div>
                                </a>
                                <ul id="list" class="dropdown-menu" aria-labelledby="dropdownProfileButton">
                                  @php $admin_notifikasi = App\Models\AdminNotification::where('notifiable_id',Auth::user()->id)->where('read_at', NULL)->orderBy('created_at','desc')->get(); @endphp
                                  @forelse ($admin_notifikasi as $notifikasi)
                                  @php $notif = json_decode($notifikasi->data); @endphp
                                  <div class="d-none">
                                    <li id="notif_admin">
                                        <a href="{{ route('notification', $notifikasi->id) }}" class="dropdown-item btnunNotif" data-num=""><small> [User: {{ $notif->nama }}] {{ $notif->message }}</small></a>
                                    </li>
                                  </div>
                                  <li id="notif_admin_active">
                                    
                                  </li>
                                  @empty
                                      <li>
                                      <a href="#" class="dropdown-item btnun  Notif" data-num="" >
                                          &nbsp;<small>Tidak ada notifikasi</small>
                                      </a>
                                      </li>
                                  @endforelse
                                </ul>
                            </ul>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('assets_admin/images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

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

        <div class="container-fluid">  <!-- table produk -->
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"><strong>Produk</strong></h4>
                    {{-- <div class="card-tools">
                      <a href="/produk" class="btn btn-sm btn-danger">
                        More
                      </a>
                    </div> --}}
                  </div>
                  <div class="card-body">
          
                    {{-- isi --}}
                    <div class="container">
                      <div class="grid-margin stretch-card pt-5">
                      <div class="card">
                      <div class="card-body">
                      <div id="container" style="width: 95%;">
                      <canvas id="canvas"></canvas>
                      </div>
                      <?php
                          $bulan = ["$january", "$february","$march","$april","$may","$june","$july","$august","$september","$october","$november","$december"];
                          //$bulans = ["0", "100","1","100","100","100","9","100","100","8","100","100"];
                          
                      ?>
          
                      <?php 
                          //misal ada 3 dealer
                          $transaksi = 1;
                          $k=0;
                          for($d=1; $d<=$transaksi;$d++){
                          //kemudian misal data dari bulan 1 hingga bulan 12
                              for($b=1;$b<=12;$b++){
                                  $data[$d][$b] = $bulan[$k];
                                  $k++;
                                  
                              }
                          }
                          // echo $data[1][5];
                         
                         
                          function random_color(){  
                              return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                          }
                      ?>
                  
                      <script>
                          var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                          var color = Chart.helpers.color;
                          var barChartData = {
                              labels: MONTHS,
                              datasets: [
                                  <?php 
                                          for($d=1;$d<=$transaksi;$d++){
                                              $color = random_color();
                                              ?>
                                              {
                                                  label: '<?php echo "Transaksi success ";?>',
                                                  backgroundColor: color('<?php echo $color;?>').alpha(0.5).rgbString(),
                                                  borderColor: '<?php echo $color;?>',
                                                  borderWidth: 1,
                                                  data: [
                                                      <?php 
                                                          for($b=1;$b<=12;$b++){
                                                              echo $data[$d][$b].",";
                                                          }
                                                      ?>     
                                                  ]
                                              },
                                              <?php 
                                          }
                                  ?>
                              ]    
                          };
                          
                          window.onload = function() {
                              var ctx = document.getElementById('canvas').getContext('2d');
                              window.myBar = new Chart(ctx, {
                                  type: 'bar',
                                  data: barChartData,
                                  options: {
                                      responsive: true,
                                      legend: {
                                          position: 'top',
                                      },
                                      title: {
                                          display: true,
                                          text: 'Grafik Transaksi bulanan'
                                      }
                                  }
                          });
                          
                          };        
                      </script>
                      </div>
                      </div>
                      </div>
              
                      <div class="grid-margin stretch-card pt-5">
                          <div class="card">
                              <div class="card-body">
                              <!-- OVERVIEW -->
                                  <div class="panel panel-headline">
                                      <div class="panel-heading ">
                                          <p class="panel-subtitle" style="font-weight: bold">Periode: {{ date('d-m-Y H:m:s', strtotime($now)) }}</p>
                                      </div>
                                      
                                      <div class="panel-body mt-4">
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <div class="metric">
                                                      <span class="icon">
                                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                      </span>
                                                      <p>
                                                          <span class="number">{{ $monthlySales }}</span>
                                                          <span class="title">Penjualan Bulanan</span>
                                                      </p>
                                                  
                                                      <div class="weekly-summary">
                                                          <span class="number">Rp{{ number_format($incomeMonthly) }}</span>
                                                          <span class="info-label">Pendapatan Bulanan</span>
                                                      </div>
                                                  
                                                  </div>
                                              </div>
          
                                              <div class="col-md-4">
                                                  <div class="metric">
                                                      <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                                      <p>
                                                          <span class="number">{{ $annualSales }}</span>
                                                          <span class="title">Penjualan Tahunan</span>
                                                          
                                                      </p>
          
                                                      <div class="weekly-summary ">
                                                          <span class="number">Rp{{ number_format($incomeAnnual) }}</span>
                                                          <span class="info-label">Pendapatan Tahunan</span>
                                                      </div>
                                                  </div>
                                              </div>
          
                                              <div class="col-md-4">
                                                  <div class="metric">
                                                      <span class="icon"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                      </span>
                                                      <p>
                                                          <span class="number">{{ $allSales }}</span>
                                                          <span class="title">Total Penjualan</span>
                                                      </p>
                                                      <div class="weekly-summary">
                                                          <span class="number">Rp{{ number_format($incomeTotal) }}</span>
                                                          <span class="info-label">Total Pendapatan</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              </div>
                                      </div>
                                  </div>
                              <!-- END OVERVIEW -->
                              </div>
                          </div>
                      </div>                      
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

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