<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
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
    <style>
        .slider-img{
          width: 100%;
          height: 300px;
          object-fit: cover;  
        }
        .img-box{
          width: 100%;
          height: 300px;
          object-fit: cover; 
        }
        .img-index{
          width: 100px;
          height: 70px;
          object-fit: cover; 
        }
    </style>
  
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    
    <title>Praktikum Prognet 2022 Kelompok 16</title>
  </head>
  <body>
    {{-- <!-- menunya kita taruh persis di bawah <body> -->
    @include('layouts.menu')
    <!-- di bawah menu baru kontennya --> --}}

    <!-- Mulai sini kontennya depannya kasih @ sama yield-->
    @yield('content')
    <!-- Sampai sini -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- jQuery
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    -->
    <!-- Bootstrap 4 
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    -->

    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    
    <!-- Core -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    
    <!-- Optional plugins -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon-design-system.js') }}"></script>
    
    <!-- Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('js/fontawesome-free/css/all.min.css') }}">

<script type="text/javascript">
      $(document).ready(function () {
          $('select[name="province_destination"]').on('change', function () {
              var cityId = $(this).val();
              if (cityId) {
                  $.ajax({
                      url: 'getCity/ajax/' + cityId,
                      type: "GET",
                      dataType: "json",
                      success: function (data) {
                          $('select[name="destination"]').empty();
                          $.each(data, function (key, value) {
                              $('select[name="destination"]').append(
                                  '<option value="' +
                                  key + '">' + value + '</option>');
                          });
                      }
                  });
              } else {
                  $('select[name="destination"]').empty();
              }
          });
      });
    </script>

  <script>
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        prview.style.visibility = 'visible';
    
        prview.src = URL.createObjectURL(file)
      }
    }
  </script>
  </body>
</html>