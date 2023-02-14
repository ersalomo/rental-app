@extends('auth.auth', ['title' => 'Register'])
@section('content')
    <section class="content row justify-content-center mt-5">
        <div class="">
            <form action="{{ route('register') }}" method="post" class="">
                @csrf
                <div class="form-group">
                    <label for="" class="label">
                        Fullname
                        <input type="text" name="name" class="form-control" placeholder="">
                    </label>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">
                        Email
                        <input type="email" name="email"class="form-control" placeholder="">
                    </label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">
                        Password
                        <input type="password" name="password"class="form-control" placeholder="">
                    </label>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </section>
@endsection
