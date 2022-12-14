<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{url('/favicon.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>{{__('lg.connect.login')}}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>
<body>
    <div class="page">
        <div class="box">
            <h2 class="title">{{__('lg.connect.login')}}</h2>
            <div class="logo">
                <img src="{{url('/static/images/logo.png')}}" alt="{{config('cms.app_name')}}">
            </div>
            <div class="form mtop16">
                {!! Form::open(['url' => '/', 'id' => 'form_connect'])!!}
                <label for="email">{{__('lg.connect.email')}}</label>
                <div class="group">
                    <i class="bi bi-envelope-open"></i>
                    {!! Form::email('email',null,['class' => 'input']) !!}
                </div>

                <label for="password">{{__('lg.connect.password')}}</label>
                <div class="group">
                    <i class="bi bi-fingerprint"></i>
                    {!! Form::password('password',['class' => 'input']) !!}
                </div>
                {!! Form::submit(__('lg.connect.connect'), ['class' => 'btn mtop16']) !!}
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</body>
</html>
