@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="container h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="card shadow-lg mt-4 mb-4">
                <div class="card-body p-5">
                    <h1 class="fs-2 card-title fw-bold mb-4">@lang('login.login')</h1>
                    <form method="" class="needs-validation" novalidate="" autocomplete="off">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">@lang('login.email')</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required
                                autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">@lang('login.password')</label>
                                <a href="#" class="float-end text-muted">
                                    @lang('login.forgot_password')
                                </a>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn login-btn mx-auto"
                                style="width: 100%; border-radius: 6px;">
                                @lang('login.login')
                            </button>
                        </div>
                    </form>
                    <div class="mt-4 text-center">
                        @lang('login.no_account') <a href="/register" class="text-dark">@lang('login.create')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection