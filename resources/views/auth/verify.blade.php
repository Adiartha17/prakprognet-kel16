<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Verifikasi Email</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="{{ asset('assets_login/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets_login/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('assets_login/css/style.css') }}">

</head>

<body> 
    <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center">
                    <div class="col-md-20 col-lg-8">
                        <div class="wrap">
                    <div class="img" style="white-background">   
			    </div>
                <div class="p-4 p-md-5 text-left">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Verifikasi Email Anda</h3>
			      		</div>
			      	</div>
                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Link untuk verifikasi email telah dikirim.') }}
                                    </div>
                                @endif

                                {{ __('Periksalah inbox email Anda untuk melakukan verifikasi, setelahnya lakukan login kembali.') }}
                                {{ __('Belum menerima email?') }}
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik di sini') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>   

