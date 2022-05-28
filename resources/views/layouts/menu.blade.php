<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(() => {
        var dt = new Date();
        // $("#autodiv").text(dt.getSeconds());
        $("#lonceng_active_user").load(location.href + " #lonceng_user");
        $("#notif_user_active").load(location.href + " #notif_user");
        }, 1000);
    });
    </script>

  </head>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/home" class="logo">
                            <img src="assets/images/logonew3.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Men's</a></li>
                            <li class="scroll-to-section"><a href="#women">Women's</a></li>
                            <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="{{ route('productlist') }}">Products</a></li>
                                    <li><a href="{{ route('cartlist') }}">Cart</a></li>
                                    <li><a href="{{ route('transaksi') }}">Transaksi</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul>
                            </li>

                            
                                <div class="submenu">
                                  @if (Auth::user())	
                                  @php $user_notifikasi = App\Models\UserNotification::where('notifiable_id', Auth::user()->id)->where('read_at', NULL)->orderBy('created_at','desc')->get(); @endphp
                                  @php $user_unRead = App\Models\UserNotification::where('notifiable_id', Auth::user()->id)->where('read_at', NULL)->orderBy('created_at','desc')->count(); @endphp
                                  <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-notify="{{$user_unRead}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color:#000102" >
                                   Notifikasi
                                    <div class="d-none">
                                      <span id="lonceng_user" class="badge bg-danger">{{$user_unRead}}</span>
                                    </div> 
                                    <span id="lonceng_active_user" class=""></span>
                                  </a>
                      
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  @forelse ($user_notifikasi as $notifikasi)
                                  @php $notif = json_decode($notifikasi->data); @endphp
                                  <div class="d-none">
                                    <a id="notif_user" class="dropdown-item" href="{{ route('notifikasi', $notifikasi->id) }}" class="dropdown-item btnunNotif" data-num="">
                                      <small>[{{ $notif->nama }}] {{ $notif->message }}</small>
                                    </a>
                                  </div>
                                  <div id="notif_user_active">
                      
                                  </div>
                                  @empty
                                  <a class="dropdown-item" href="#" data-num=""><small>Tidak ada notifikasi</small></a>
                                  @endforelse
                                  </div>
                                  @else 
                                  {{-- <a class="nav-link" href="#">Notifikasi</a> --}}
                                  @endif
                                </div>
                              

                          <div class="col-20">
                            <li class="submenu">  
                                <a href="javascript:;">
                                {{ Auth::user()->user_name }}
                                </a>
                                <ul>
                                    <li><a href="{{ route('userprofile') }}">Profile</a></li>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                    </form>
                                </ul>
                              </li>
                          </div>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

