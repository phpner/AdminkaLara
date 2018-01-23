<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Привет!</div>

                <div class="panel-body">
                    <form action="login">
                        <div class="form-group col-md-8">
                            <label for="Email">Email адрес</label>
                             <input type="text" id="Email" class="form-control">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="password">Ваш пароль</label>
                             <input type="password" id="password" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary pull-right col-md-4">Вход</button>
                            {{ csrf_field() }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>