@extends('layouts.app')

@section('mainContent')
    <div class="container hero-contacts">
        <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <img src="{{asset('img/map.png')}}" alt="">
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Say hello</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form>
                <div class="inline">
                    <div>
                        <label>First Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text">
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email" class="one-line">

                <label>Message</label>
                <textarea class="one-line"></textarea>

                <button type="button">Get in touch</button>
            </form>
        </div>
    </div>

@endsection
