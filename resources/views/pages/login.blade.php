@extends('index')
@section('content')
@if($errors->all())
<div class="errorcredential">
    <div class="errormsg">
        <b>Invalid Credential</b>
    </div>
</div>
@endif
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8 mt-5">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Login
        </h2>
    </div>
<div class="d-flex justify-content-center" style="margin-top: 2.5%;">
    <div class="card row d-flex" style="width: 30rem;">
        <div class="card-body">
            <form action="/login" method="POST">
                @csrf
                <p class="card-text">Email</p>
                <div class="mb-3">
                    <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="card-text">Password</p>
                <div class="mb-3">
                    <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" value="{{ old('password') }}"/>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p>
                    <input type="checkbox">
                    <label>Remember me</label>
                </p>
                <p><a href="/login"><button class="btn btn-dark" style="width: 100%;">Login</button></a></p>
            </form>
        </div>
    </div>
</div>
@endsection
