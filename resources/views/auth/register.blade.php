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
                <small>Sign up with credentials</small>
              </div>
              <form role="form" method="POST" action="{{ route('register') }}">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" name="name" placeholder="Name" type="text">
                  </div>
                  @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="email">
                  </div>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
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
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password_confirmation" placeholder="Password Confirmation" type="password">
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span>I agree with the
                          <a href="#">Privacy Policy</a>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Create account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
