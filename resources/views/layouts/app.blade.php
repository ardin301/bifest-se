<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href='{{ asset("css/asset.css") }}' >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>

        <title>Semino</title>
    </head>
    <body>
        @include('inc.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('inc.foot')


    </body>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src='{{asset("js/moment-with-locales.min.js")}}'></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


    <script type="text/javascript">
        $(function () {
            $('#datetimepicker-start').datetimepicker({
                format: 'DD/MM/YYYY HH:mm'
            });
            $('#datetimepicker-end').datetimepicker({
                format: 'DD/MM/YYYY HH:mm'
            });
        });
    </script>
</html>
