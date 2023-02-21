@extends('auth.auth', ['title' => 'Login'])
@section('content')
    <section class="content row justify-content-center mt-5">
        <div class="">
            @if (Session::has('fail'))
                <span class="text-danger">
                    {{ __(Session::get('fail')) }}
                </span>
            @endif
            <form action="{{ url('login') }}" method="post" class="form-table">
                @csrf
                <div class="form-group">
                    <label for="">
                        Email
                        <input type="email" name="email" class="form-control" placeholder="">
                        @error('email')
                            <span class="text-danger fs-5" style="font-size:12px;font-style:italic;">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="form-group">
                    <label for="">
                        Password
                        <input type="password" name="password" class="form-control" placeholder="">
                        @error('password')
                            <span class="text-danger" style="font-size:12px;font-style:italic;">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>

    </section>
@endsection
