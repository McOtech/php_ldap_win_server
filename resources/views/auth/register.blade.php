@extends('layouts.auth')
@section('content')

<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
  <div class="row w-100">
    <div class="col-lg-8 mx-auto">
      <h2 class="text-center mb-4">Register</h2>
      <div class="auto-form-wrapper">
        @if ($errors->has(env('MESSAGE_LITERAL')))
        <!-- Alert Message Start -->
        <div class="alert alert-{{ $errors->get(env('MESSAGE_LITERAL'))['type'] }} mb-4">
            {{ $errors->get(env('MESSAGE_LITERAL'))['description'] }}
        </div>
        <!-- Alert Message End -->
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
          <div class="form-row">
            <div class="col-lg-6">
                <div class="form-group pb-3">
                    <div class="input-group">
                        <input type="text" name="id" value="{{ old('id') }}" class="form-control @error('id') is-invalid @enderror" placeholder="regno/payroll" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                            <i class="mdi mdi-account-circle"></i>
                            </span>
                        </div>
                        @error('id')
                            <span class="invalid-feedback" role="alert">
                                <em>{{ $message }}</em>
                            </span>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group pb-3">
                <div class="input-group">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email (example@gmail.com)" required>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-email"></i>
                    </span>
                  </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <em>{{ $message }}</em>
                        </span>
                    @enderror
                </div>
              </div>
            </div>
          </div>

          <div class="form-group pb-3">
            <div class="input-group">
              <input type="tel" name="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile (0712345689)" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-cellphone"></i>
                </span>
              </div>
                @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <em>{{ $message }}</em>
                    </span>
                @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="col-lg-6">
              <div class="form-group pb-3">
                <div class="input-group">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-shield-lock"></i>
                    </span>
                  </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <em>{{ $message }}</em>
                        </span>
                    @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <div class="input-group pb-3">
                  <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-shield-lock"></i>
                    </span>
                  </div>
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <em>{{ $message }}</em>
                        </span>
                    @enderror
                </div>
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
            <button class="btn btn-primary submit-btn btn-block">Register</button>
          </div>
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Already have an account ?</span>
            <a href="{{ route('login.get') }}" class="text-black text-small">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
