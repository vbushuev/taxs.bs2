@extends('layouts.app')

@section('content')
<main class="main">
    <div class="container">
        <div class="content">
        <center class="bot">
            <form id="myform" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                <input type="submit" value="Регистрация">
            </form>
        </center>
        </div>
    </div>
</main>
@endsection
