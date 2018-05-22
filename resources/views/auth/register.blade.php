{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Laravel - Register</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/flat.min.css')}}"> -->
        <!-- END Stylesheets -->
    </head>
<body>
        <div id="page-container" class="main-content-boxed">
                <!-- Main Container -->
                <main id="main-container">
                    <!-- Page Content -->
                    <div class="bg-image" style="background-image: url('{{asset('/img/workbench.jpg')}}');">
                        <div class="row mx-0 bg-black-op">
                            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                                <div class="p-30 invisible" data-toggle="appear">
                                    <p class="font-size-h3 font-w600 text-white">
                                        Learn Laravel PHP.
                                    </p>
                                    <p class="font-italic text-white-op">
                                        Copyright &copy; <span class="js-year-copy">2018</span>
                - Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#" target="_blank">Salah Eddine</a>                                        
                                    </p>
                                </div>
                            </div>
                            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                                <div class="content content-full">
                                    <!-- Header -->
                                    <div class="px-30 py-10">
                                        <a class="link-effect font-w700" href="index.html">
                                            {{-- <i class="si si-fire"></i> --}}
                                            <span class="font-size-xl text-primary-dark">Lara</span><span class="font-size-xl">vel</span>
                                        </a>
                                        <h1 class="h3 font-w700 mt-30 mb-10">Create New Account</h1>
                                        <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                                    </div>
                                    <!-- END Header -->
    
                                    <!-- Sign Up Form -->
                                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <div class="col-md-12">
                <form class="js-validation-signup px-30" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

      <div class="form-group row">
        <div class="col-12">
                <div class="form-material floating">
                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                 <label for="name">Username</label>
                       
                </div>
        </div>
      </div>
            <div class="form-group row">
                    <div class="col-12">
                            <div class="form-material floating">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                                  
                            </div>
                    </div>
            </div>
                    {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}
            <div class="form-group row">
                    <div class="col-12">
                            <div class="form-material floating">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password">Password</label>
                                   
                            </div>
                    </div>
            </div>
                    {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}
            <div class="form-group row">
                    <div class="col-12">
                            <div class="form-material floating">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm">Confirm Password</label>
                            </div>
                    </div>
            </div>
                    {{-- <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div> --}}

                    {{-- <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                            <div class="col-12">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">I agree to Terms &amp; Conditions</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                <i class="fa fa-plus mr-10"></i> Create Account
                            </button> --}}
                            <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                    <i class="fa fa-plus mr-10"></i> Register
                            </button>
                            <a href="/" role="button" class="btn btn-sm btn-hero btn-alt-primary pull-right">
                                <i class="fa fa-arrow-left mr-10"></i> Back </a>
                            <div class="mt-30">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                    <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
                                    <i class="fa fa-user text-muted mr-5"></i> Sign In
                                </a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
    </main>
    </div>
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>

    
   <!-- Codebase Core JS -->
   <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
   <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
   <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
   <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
   <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
   <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
   <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
   <script src="{{asset('assets/js/codebase.js')}}"></script>

   <!-- Page JS Plugins -->
   <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
   {{-- <script src="{{asset('assets/js/codebase.min-2.1.js')}}"></script> --}}

   <!-- Page JS Code -->
   <script src="{{asset('assets/js/pages/op_auth_signup.js')}}"></script>

   <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>

</body>
</html>
