@extends('blog.index')

@section('content')
<section class="section section-shaped section-lg my-0">
  <div class="shape shape-style-1 bg-gradient-darker">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="container pt-lg-md">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>Sign in with credentials</small>
            </div>
            <form role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" name="password" placeholder="Password" type="password">
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <a href="{{ route('password.request') }}" class="text-light">
              <small>Forgot password?</small>
            </a>
          </div>
          <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
              <small>Create new account</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
