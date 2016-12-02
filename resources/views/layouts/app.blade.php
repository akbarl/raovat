<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title','Welcome to RV')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link href="/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	
	<!-- CSS Custom -->
	<style>
		.navbar-default .navbar-nav > .active > a{
			color: blue;
			background-color: white;
		}
	</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/uploads/logo.gif" alt="RV" height="30px"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- &nbsp; -->
						<li class="active">
							<a href="/"><strong>Trang chủ</strong></a>
						</li>
						
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
					@if(Request::path() != "/")
						<li>
							
							<form class="navbar-form navbar-left" action="../search">
								<select name="location" class="form-control">
								  
									@foreach(App\Location::all() as $l)
										@if(session('location') == $l->id)
											<option value="{{$l->id}}" selected>{{$l->name}}</option>
										@else
											<option value="{{$l->id}}">{{$l->name}}</option>
										@endif
									@endforeach
								 
								</select>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Bạn đang cần gì?" name="content">
								</div>
							  <button type="submit" class="btn btn-default">Tìm kiếm</button>
							</form>
						</li>
					@endif
						<li>
							 <div class="navbar-form navbar-left">
								<a href="/thread/create"><button class="btn btn-primary">Đăng bài</button></a>
							</div>
						</li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
                            <li><a href="{{ url('/register') }}">Đăng ký</a></li>
                        @else
							@if(Auth::user()->isAdmin())
								<li class="active">
									<a href="/admin"><strong>Admin CP</strong></a>
								</li>
							@endif
                            <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }}<span class="caret"></span>
									</a>
                                <ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{url('/account') }}">Tài khoản của tôi</a>
									</li>
									
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
									
									
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
		@yield('menu')
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- <script type='text/javascript' src="/js/jquery.timeago.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>
</html>
