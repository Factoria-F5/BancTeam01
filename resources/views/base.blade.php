<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend F5</title>
    <link href="{{ asset('css/app.css' )}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container-fluid">
        <div class="logo">
        <span><img src="http://www.bancderecursos.org/wp-content/uploads/icona_logo.png" width="300px" class="float-left" alt="logo"></span>
        </div>
        
        @yield('main')
        
        
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    
</body>
</html>