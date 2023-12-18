@extends('layouts.master')
@section('title', 'Register')
@section('content')
<div class="container h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="auth-card shadow-lg mt-4 mb-4">
                <div class="card-body p-5">
                    <h1 class="fs-2 auth-card-title fw-bold mb-4">@lang('register.create_account')</h1>
                    <form method="" class="needs-validation" novalidate="" autocomplete="off">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">@lang('register.email')</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required
                                autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">@lang('register.password')</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">@lang('register.confirm_password')</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Confirm password is required
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn login-btn mx-auto"
                                style="width: 100%; border-radius: 6px;">
                                @lang('register.register')
                            </button>
                        </div>
                    </form>
                    <div class="mt-4 text-center">
                        @lang('register.got_account') <a href="/login" class="text-dark">@lang('register.login')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection