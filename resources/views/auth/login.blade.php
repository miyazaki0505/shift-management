@extends('layouts.app')

@section('content')

<div class="text-center">
    <h3 class="register">Login</h3>
</div>

<div class="row mt-5 mb-5">
    <div class="col-sm-6 offset-sm-3">
        {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="text-center mt-5">
                {!! Form::submit('Login', ['class' => 'btn btn-secondary mt-2']) !!}
            </div>
        {!! Form::close() !!}

        <p class="text-center mt-5">{!! link_to_route('signup', 'Sign Up') !!}</p>

    </div>
</div>

@endsection
