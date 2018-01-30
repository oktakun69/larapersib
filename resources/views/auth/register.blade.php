@extends('laynoside')

@section('title', 'Register Form')

@section('halamannoside')

<div class="middle-box text-center loginscreen animated fadeInUp">
    <div>
        <div>
            <h1 class="logo-name">
              <img src="https://upload.wikimedia.org/wikipedia/id/1/12/Logo_Persib.png" width="220" height="250">
            </h1>

        </div>
        <hr>
        <h3>PERSIB BANDUNG ADMINISTRATOR</h3>

        <p>Register New User</p>

        {!! Form::open(['class' => 'm-t']) !!}
        <div class="form-group">
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nama', 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email', 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password', 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'retype Password', 'required']) }}
        </div>

        {{ Form::submit('Register', ['class' => 'btn btn-success btn-block btn-rounded btn-outline']) }}
        {!! Form::close() !!}
        <p>
          <br>
          <a href="/auth/login"> Have Already Account ? login </a>
        </p>
        <p class="m-t"> <small>persib &copy; 2018</small> </p>

    </div>
</div>

<!--
<form class="m-t" role="form" action="index.html">
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Username" required="">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" required="">
    </div>
    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

    <a href="#"><small>Forgot password?</small></a>
    <p class="text-muted text-center"><small>Do not have an account?</small></p>
    <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
</form>
-->

@endsection
