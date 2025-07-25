@extends('layouts.app')

@section('mainContent')
        <div class="container trending">
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
@endsection

