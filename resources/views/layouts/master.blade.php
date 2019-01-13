<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Ajax Crud</title>
        <!--bootstrap cdn-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/r-2.2.2/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

        <!-- sweetalert-->
        <link rel="stylesheet" type="text/css" href="{{asset('sweetalert/sweetalert.css')}}">


    </head>
    <body>
    <div class="container" style="margin-top: 50px;">
        @yield('content')
    @yield('modal')
    </div>
        

        <!--start of scripts-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/r-2.2.2/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
        <script src="{{asset('sweetalert/sweetalert.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
        @stack('scripts')
        <!---end of scripts-->
    </body>
</html>
