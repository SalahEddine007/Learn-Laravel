<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Learn Laravel </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px}
.w3-row-padding, .w3-row-padding>.w3-half, .w3-row-padding>.w3-third, .w3-row-padding>.w3-twothird, .w3-row-padding>.w3-threequarter, .w3-row-padding>.w3-quarter, .w3-row-padding>.w3-col {
    padding: 0 8px;
}
.w3-white, .w3-hover-white:hover {
    color: #000!important;
    background-color: #fff!important;
}
</style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
<script type="text/javascript" src="{{asset('js/jquery.app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  
 <link href="https://bootswatch.com/lumen/bootstrap.css" rel="stylesheet" type="text/css">


<style>
.navbar.navbar-inverse {
    
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
 

</style>



</head>
<body>
    



        @include('includes.navbar')
        @include('includes.messages')
 @yield('content')
        
    
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
