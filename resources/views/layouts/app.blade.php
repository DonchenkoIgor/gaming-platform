<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Website</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="wrapper">
    <header class="container">
        <span class="logo">Logo</span>
        <nav>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">News</a></li>
                <li class="btn"><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>

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
        <a href="#" class="see-all">SEE ALL</a>
        <h3>Currently Trending Games</h3>

        <div class="games">
            <div class="block">
                <img src="{{asset('img/game1.png')}}" alt="">
                <span><img src="{{asset('img/fire 1.svg')}}" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="{{asset('img/game2.png')}}" alt="">
                <span><img src="{{asset('img/fire 1.svg')}}" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="{{asset('img/game3.png')}}" alt="">
                <span><img src="{{asset('img/fire 1.svg')}}" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="{{asset('img/game4.png')}}" alt="">
                <span><img src="{{asset('img/fire 1.svg')}}" alt="">40 Followers</span>
            </div>
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
</div>

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
</div>
</body>
</html>
