<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Klinthung Banyumas</title>
	  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  	<form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
      	<h1 class="h3 mb-3 font-weight-normal">{{ __('Login') }}</h1>
      	<label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
     		<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				
			 	@error('email')
                    <span class="invalid-feedback" role="alert">
                    	<strong>{{ $message }}</strong>
                    </span>
                @enderror

		<label for="password" class="sr-only">{{ __('Password') }}</label>
     		<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror

      	<div class="checkbox mb-3">
        <label>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
	
		</label>
                                    

      	</div>
      	<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<p>belum memiliki akun? <a href="/register">registrasi</a></p>   
    </form>
  

</body></html>
