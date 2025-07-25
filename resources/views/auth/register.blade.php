@extends('layouts.app')

@section('mainContent')
    <div class="feedback">
        <div class="container">
            <h2>Registration</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line" name="email">

                <label>Password</label>
                <input type="password" class="one-line" name="password">

                <button type="submit">Register</button>
            </form>
        </div>
    </div>

@endsection
