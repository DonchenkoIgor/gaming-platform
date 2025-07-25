@extends('layouts.app')

@section('mainContent')
    <div class="feedback">
        <div class="container">
            <h2>Authorization</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action="{{route('login')}}">
                @csrf
                <label>Email</label>
                <input type="email" class="one-line" name="email">

                <label>Password</label>
                <input type="password" class="one-line" name="password">


                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Remember Me</span>
                </label>


                <button type="submit">Log In</button>

                @if ($errors->any())
                    <div class="errors">
                        @foreach ($errors->all() as $error)
                            <p style="color:red">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

            </form>
        </div>
    </div>

@endsection
