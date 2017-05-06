@extends('auth.login_layout')

@section('content')
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="{{asset('/admin-assets/images/login-logo.png')}}" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Promotegh <br/> Admin Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="email" value="{{ old('email') }}" required autofocus>
            <label for="username" class="center-align">Username/email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
          </div>
          @if ($errors->has('email'))
                <p class="login-err">
                    <strong>{{ $errors->first('email') }}</strong>
                </p>
            @endif
            @if ($errors->has('password'))
                <p class="login-err">
                    <strong>{{ $errors->first('password') }}</strong>
                </p>
            @endif
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }} />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
             <button type="submit" class="btn waves-effect waves-light col s12">
                Login
            </button>
          </div>
        </div>
        

      </form>
    </div>
  </div>
@endsection