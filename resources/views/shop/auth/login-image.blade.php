@extends('shop.auth.layouts.master')
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
          <h4>SHOP LOGIN</h4>
          <h6>Enter your Email and Password </h6>
        </div>
        <form method="POST" action="{{ route('shop.login.submit') }}" class="theme-form">
            @csrf
          <div class="form-group">
            <label for="email" class="col-form-label pt-0">Email</label>
            <input class="form-control" type="text" name="email" id="email" required="">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password" required="">
          </div>
          <div class="checkbox p-0">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">Remember me</label>
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
