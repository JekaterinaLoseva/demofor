<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>{{$title}}</title>
<!--
<link rel="icon" href="favicon.png" type="image/png">
<link href="{{asset('assets/css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/freelancer.min.css')}}" rel="stylesheet" type="text/css"> 
-->

<link rel="icon" href="favicon.png" type="image/png">
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css"> 


<script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>

 <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('assets/https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('assets/js/freelancer.min.js') }}"></script>	

	
</head>
<body>

<header id="header_wrapper">
	@yield('header') 
	
	
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</header>
	@yield('content')
</body>
</html>
