@extends('pages.dashboard.main')
@section('title', 'Profile')
@section('headcontent')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('images/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{url('/images')}}/avatar.jpg" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{$user->user_full_name}}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        {{$user->user_email}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form role="form text-left" action="<?php echo url('/editprofile')?>" method="POST">
            @csrf
            @if (Session::has('success') || Session::has('error'))
            <div class="alert alert-{{Session::has('success') ? 'success' : 'danger'}}" role="alert">
                {{Session::get('success')}}
                {{Session::get('error')}}
            </div>
            @endif
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                    aria-describedby="email-addon" name="name" value="{{$user->user_full_name}}">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                    aria-describedby="email-addon" name="email" value="{{$user->user_email}}" disabled>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password"
                    aria-label="Password" aria-describedby="password-addon" name="password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Profile</button>
            </div>
        </form>
    </div>
</div>
@endsection