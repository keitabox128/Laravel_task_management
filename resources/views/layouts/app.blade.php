<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>タスクマネジメント</title>
        <!--<link rel="stylesheet" type="text/css" href="/task_management/CSS/style.css">-->
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        @include('commons.navbar')
        
        @include('commons.errors')
        
        @yield('content')
    </body>
</html>