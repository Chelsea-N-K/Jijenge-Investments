@extends('layouts.app')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <p class="font-weight-bold">
                Jijenge<b class="font-weight-light">Investments</b>
            </p>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg"><strong>Register</strong> a new membership</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="tel" id="phone_number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="agreeTerms" name="terms" value="agree" required>
                                <label class="custom-control-label" for="agreeTerms">I agree to the <a style="color: #1e991a;" href="#">terms</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block my-3">Register</button>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <p class="mb-1" align="center">
        <a style="color: #000000;" href="{{ route('login') }}" class="text-center">I already have an account</a>
    </p>
@endsection
