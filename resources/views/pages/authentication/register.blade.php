@extends('pages.authentication.main')
@section('title', 'Register')
@section('content')
<!-- End Navbar -->
<main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('images/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-2"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Register with</h5>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" action="<?php echo url('/register')?>" method="POST">
                                @csrf
                                @if (Session::has('success') || Session::has('error'))
                                <div class="alert alert-{{Session::has('success') ? 'success' : 'danger'}}" role="alert">
                                    {{Session::get('success')}}
                                    {{Session::get('error')}}
                                </div>
                                @endif
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                        aria-describedby="email-addon" name="name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                        aria-describedby="email-addon" name="email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="password-addon" name="password">
                                </div>
                                <label>Register Sebagai</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_org" value="O" name="is_org">
                                    <label class="form-check-label" for="is_org">Organisasi</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a
                                        href="<?php echo url('/login');?>" class="text-dark font-weight-bolder">Sign
                                        in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
