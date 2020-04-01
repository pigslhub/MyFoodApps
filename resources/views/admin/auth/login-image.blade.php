@extends('admin.auth.layouts.master')
@section('title', 'Login')
@section('style')

@endsection

@section('content')
<div class="auth-bg">
  <div class="authentication-box">
    <div class="text-center"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></div>
    <div class="card mt-4">
      <div class="card-body">
        <div class="text-center">
          <h4>ADMIN LOGIN</h4>
          <h6>Enter your Username and Password </h6>
        </div>
        <form method="POST" action="{{ route('admin.login.submit') }}" class="theme-form">
          @csrf
          <div class="form-group">
            <label class="col-form-label pt-0">Your Name</label>
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>
          <div class="form-group">
            <label class="col-form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          </div>
         
          <div class="form-group form-row mt-3 mb-0">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </div>
          <div class="login-divider"></div>
         
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection
