@extends('layouts.auth')
@section('content')

<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4">Login</h2>
      <div class="auto-form-wrapper">
          @if ($errors->has(env('MESSAGE_LITERAL')))
            <!-- Alert Message Start -->
            <div class="alert alert-{{ $errors->get(env('MESSAGE_LITERAL'))['type'] }} mb-4">
                {{ $errors->get(env('MESSAGE_LITERAL'))['description'] }}
            </div>
            <!-- Alert Message End -->
          @endif

        <form action="#">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Registration Number">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-account-circle"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-shield-lock"></i>
                </span>
              </div>
            </div>
          </div>

          <!-- <div class="form-group d-flex justify-content-center">
            <div class="form-check form-check-flat mt-0">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
            </div>
          </div> -->
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Login</button>
          </div>
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Don't have an account yet ?</span>
            <a href="{{ route('register.get') }}" class="text-black text-small">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
