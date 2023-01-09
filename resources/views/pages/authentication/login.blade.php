@extends('pages.authentication.main')
@section('title', 'Login')
@section('content')
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo url('/login')?>" method="POST">
                                    @csrf
                                    @if (Session::has('success') || Session::has('error'))
                                    <div class="alert alert-{{Session::has('success') ? 'success' : 'danger'}}" role="alert">
                                        {{Session::get('success')}}
                                        {{Session::get('error')}}
                                    </div>
                                    @endif
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                            aria-describedby="email-addon" name="email" value="<?php echo isset($_COOKIE['email'])? $_COOKIE['email'] : '';?>">
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password"
                                            aria-label="Password" aria-describedby="password-addon" name="password" value="<?php echo isset($_COOKIE['password'])? $_COOKIE['password'] : '';?>">
                                    </div>
                                    <label>Login Sebagai</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_org" value="O" name="is_org">
                                        <label class="form-check-label" for="is_org">Organisasi</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="remember_me" value="Y" name="remember_me">
                                        <label class="form-check-label" for="remember_me">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="<?php echo url('/register');?>" class="text-info text-gradient font-weight-bold">Sign
                                        up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('images/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
