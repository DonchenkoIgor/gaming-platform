@extends('layouts.app')

@section('mainContent')
    <div class="hero container">
        <div class="hero--info">
            <h2>3D game Dev</h2>
            <h1>Work that we produce for our clients</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard.</p>
            <button class="btn">Get more details</button>
        </div>
        <img src="{{asset('img/joystick.svg')}}" alt="joystick">
    </div>

    <div class="container trending">
        <a href="{{route('trending')}}" class="see-all">SEE ALL</a>
        <h3>Currently Trending Games</h3>

        <div class="games">
            @foreach($trending as $game)
            <div class="block">
                <img src="{{asset($game->image)}}" alt="">
                <span><img src="{{asset('img/fire 1.svg')}}" alt="">{{$game->followers}} Followers</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container big-text">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <div class="container banner">
        <h3>Lorem Ipsum</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        <img src="{{asset('img/banner.png')}}" alt="">
    </div>
@endsection

@section('supportContent')
    <div class="features">
        <div class="container">
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="info">
                <div class="block">
                    <img src="{{asset('img/f1.png')}}" alt="">
                    <p>Mobile Game Development</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
                <div class="block">
                    <img src="{{asset('img/f2.png')}}" alt="">
                    <p>PC Game Development</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
                <div class="block">
                    <img src="{{asset('img/f3.png')}}" alt="">
                    <p>PS4 Game Development</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
                <div class="block">
                    <img src="{{asset('img/f4.png')}}" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
                <div class="block">
                    <img src="{{asset('img/f5.png')}}" alt="">
                    <p>AR/ VR design</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
                <div class="block">
                    <img src="{{asset('img/f6.png')}}" alt="">
                    <p>3D Modelings</p>
                    <img src="{{asset('img/arrow.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="images">
                <img src="{{asset('img/i1.png')}}" alt="">
                <img src="{{asset('img/i2.png')}}" alt="">
                <img src="{{asset('img/i3.png')}}" alt="">
            </div>
            <div class="images">
                <img src="{{asset('img/i4.png')}}" alt="">
                <img src="{{asset('img/i5.png')}}" alt="">
                <img src="{{asset('img/i6.png')}}" alt="">
            </div>
            <a href="" class="see-all">SEE ALL</a>
        </div>

        <div class="container email">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about TDA.
                        We promise not to spam you! </p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Enter email address">
                    <button onclick="checkEmail()">Continue</button>
                </div>
            </div>
        </div>
    </div>
@endsection
