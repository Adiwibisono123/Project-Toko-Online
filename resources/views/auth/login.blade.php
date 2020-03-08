{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-white border">
                {{-- <div class="card-header bg-transparent border-0">{{ __('Login') }}</div> --}}

                {{-- <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="col-sm-12 col-form-label pl-0">{{ __('E-Mail Address') }}</label>
                                <br>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> <label for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn-block btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
{{-- @extends('layouts.master-without-nav') --}} 


{{-- 
@section('body')
    <body class="authentication-bg authentication-bg-pattern">
@endsection

@section('content')

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">
                            
                            <div class="text-center w-75 m-auto">
                                <a href="index">
                                    <span><img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="22"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form action="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" >
                                @csrf
                                
                                <div class="form-group mb-3">
                                    {{-- <label for="emailaddress">Email address</label> --}}
                                    {{-- <label for="email" class="col-sm-12 col-form-label pl-0">{{ __      ('E-Mail Address') }}</label><br>
                                    <input class="form-control" type="email" id="emailaddress" {{ $errors->has('email') ? ' is-invalid' : '' }} name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password"class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                                </div>

                            </form>

                            <div class="text-center">
                                <h5 class="mt-3 text-muted">Sign in with</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                    </li>
                                </ul>
                            </div> --}} 

                        {{-- </div> <!-- end card-body -->
                    </div> --}}
                    <!-- end card -->

                    {{-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                            {{-- <p> <a href="pages-recoverpw" class="text-white-50 ml-1">Forgot your password?</a></p>
                            <p class="text-white-50">Don't have an account? <a href="pages-register" class="text-white ml-1"><b>Sign Up</b></a></p> --}}
                        {{-- </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div> --}}
        <!-- end page -->


        {{-- <footer class="footer footer-alt">
            2015 - {{date('Y')}} &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer> --}}
{{-- @endsection --}}
<html lang="en"><head>
        <meta charset="utf-8">
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="http://localhost:8001/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8001/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8001/assets/css/app.min.css" rel="stylesheet" type="text/css">  <script data-dapp-detection="">
(function() {
  let alreadyInsertedMetaTag = false

  function __insertDappDetected() {
    if (!alreadyInsertedMetaTag) {
      const meta = document.createElement('meta')
      meta.name = 'dapp-detected'
      document.head.appendChild(meta)
      alreadyInsertedMetaTag = true
    }
  }

  if (window.hasOwnProperty('web3')) {
    // Note a closure can't be used for this var because some sites like
    // www.wnyc.org do a second script execution via eval for some reason.
    window.__disableDappDetectionInsertion = true
    // Likely oldWeb3 is undefined and it has a property only because
    // we defined it. Some sites like wnyc.org are evaling all scripts
    // that exist again, so this is protection against multiple calls.
    if (window.web3 === undefined) {
      return
    }
    __insertDappDetected()
  } else {
    var oldWeb3 = window.web3
    Object.defineProperty(window, 'web3', {
      configurable: true,
      set: function (val) {
        if (!window.__disableDappDetectionInsertion)
          __insertDappDetected()
        oldWeb3 = val
      },
      get: function () {
        if (!window.__disableDappDetectionInsertion)
          __insertDappDetected()
        return oldWeb3
      }
    })
  }
})()</script></head>

    <body class="authentication-bg authentication-bg-pattern">


        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                {{-- <div class="card bg-white border"> --}}
                                        {{-- <div class="card-header bg-transparent border-0">{{ __('Login') }}</div> --}}
                        
                                         <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label for="email" class="col-sm-12 col-form-label pl-0">{{ __('E-Mail Address') }}</label>
                                                        <br>
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                        
                                                    <div class="col-md-12">
                                                        <label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="checkbox">
                                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> <label for="remember">{{ __('Remember Me') }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn-block btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                                                        <br>
                        
                                                        <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw" class="text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="pages-register" class="text-white ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2015 - 2020 © UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

<!-- Vendor js -->
        <script src="http://localhost:8001/assets/js/vendor.min.js"></script>

        
        <!-- App js -->
        <script src="http://localhost:8001/assets/js/app.min.js"></script>
        
            
    
</body></html>