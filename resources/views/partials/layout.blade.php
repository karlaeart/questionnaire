<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{asset('plugins/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Fontawesome -->
        <link href="{{asset('plugins/css/all.css')}}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('plugins/css/styles.css')}}" rel="stylesheet">

    </head>
    <body>

    @if(session()->has('message'))
        @include('js.sweetAlert', ['message' => session()->get('message')])
    @endif

        <div class="flex-center position-ref full-height">
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

            <div class="content">
                <div class="wrapper d-flex align-items-stretch">
                    @include('partials.sidebar')

                    <!-- Page Content  -->
                        <div id="content" class="p-4 p-md-5 pt-5">
                            @yield('content')
                        </div>
                </div>
            </div>
        </div>
        <script src="{{asset('plugins/js/jquery-3.4.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/js/popper.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/js/main.js')}}" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')
        @yield('js')
    </body>
</html>
