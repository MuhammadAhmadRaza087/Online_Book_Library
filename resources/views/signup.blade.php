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
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminStyle.css') }}">
</head>
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<form action="{{ url('/signup') }}" method="post">
						@csrf
						<div class="card-body">
						<h4 class="f-w-400">Sign up</h4>
						<hr>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="contact" placeholder="Contact Number">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="username" placeholder="Username">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
						<hr>
						<p class="mb-2">Already have an account? <a href="{{ asset('/signin') }}" class="f-w-400">Signin</a></p>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>



</body>

</html>
