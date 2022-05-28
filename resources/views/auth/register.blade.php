<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="{{ asset('assets_login/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets_login/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('assets_login/css/style.css') }}">

	</head>

    @extends('layouts.auth')
    @section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section"><b>KELOMPOK 16</b></h1>
				</div>
			</div>
            <div class="card-body">
			<form method="POST" action="{{ route('register') }}">
				@csrf
                <div class="row justify-content-center">
                    <div class="col-md-20 col-lg-8">
                        <div class="wrap">
                    <div class="img" style="white-background">   
			    </div>
                <div class="p-4 p-md-5 text-left">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register</h3>
			      		</div>
			      	</div>
                    <div class="form-group mb-3">
		            	<label class="label" for="user_name">Nama</label>
                        <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus onkeypress="return event.charCode < 48 || event.charCode  >57">
							@error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
		            </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
 							@error('email')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
							@error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="alamat">Alamat</label>
                        <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" rows="5" autofocus></textarea>
							@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="telepon">Nomor HP</label>
                        <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon"autofocus onkeypress="return event.charCode >= 48 && event.charCode <=57">
                            @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	@endsection

<script src="{{ asset('assets_login/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets_login/js/popper.js') }}"></script>
<script src="{{ asset('assets_login/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_login/js/main.js') }}"></script>

	</body>
</html>
