<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
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
			<div class="row justify-content-center">
				<div class="col-md-20 col-lg-10">
					<div class="wrap d-md-flex">
                    <div class="img" style="background-image: url( {{ asset('assets_login/images/logo.png)') }};">   
			    </div>
				<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
			      	</div>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-warning">{{ $error }}</div>
                        @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                    @endif
                    @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="form-group mb-3">
								<label class="label" for="email">Email</label>
								<input type="text" name="email" id="email" required class="form-control">
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" name="password" id="password" required class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Log In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-100 text-left">
									@if (Route::has('password.request'))
									<a href="{{ route('password.request') }}">Forgot Password?</a>
									@endif
									<p>Don't have any account? <a class="text-primary" href="{{ route('register') }}" >Register now</a></p>
								</div>
						</div>
		          	</form>
		        </div>
			</div>
		</div>
	</section>

<script src="{{ asset('assets_login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_login/js/popper.js') }}"></script>
  <script src="{{ asset('assets_login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets_login/js/main.js') }}"></script>

	</body>
</html>
@include('sweetalert::alert')
@endsection