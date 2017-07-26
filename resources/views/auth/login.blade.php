@extends('layouts.app')

@section('content')
<main class="main">
    <div class="container">
        <div class="content">
        <center class="bot">
            <form id="myform" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" placeholder="Пароль" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня</label>
                <input type="submit" value="Вход">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Забыли пароль
                </a>
            </form>
        </center>
        </div>
    </div>
</main>
@endsection
