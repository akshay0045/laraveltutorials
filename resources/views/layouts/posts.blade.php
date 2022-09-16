<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .container {
            max-width: 960px;
            margin: auto;
            background: #ccc;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>@yield('title')</h1>
        @hasSection('nevigation')
        <div class="float-right">
            @yield('nevigation')
        </div>
        <div class="clearfix"></div>
        @endif
        @if(Session::has('message'))
            <p>{{Session::get('message')}}</p>
        @endif
        <ul>
            @if($errors->any()) 
                @foreach($errors->all() as $key => $error) 
                    <li style="color:red">{{$error }}</li>
                @endforeach
            @endif
        </ul>
        @yield('content')
    </div>
</body>
</html>