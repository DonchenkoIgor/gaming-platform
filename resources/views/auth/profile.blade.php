@extends('layouts.app')

@section('mainContent')
    <div class="feedback">
        <div class="container">
            <h2>User account</h2>
            @auth()
                <p>Hello, <b>{{Auth::user()->name}} !</b></p>
            @endauth
            <div class="feedback">
                <div class="container">
                    <h2>Add game</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing .</p>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{route('games.store')}}" enctype="multipart/form-data">
                        @csrf
                        <label>Image</label>
                        <input type="file" class="one-line" name="image" accept="img/*">

                        <label>Followers</label>
                        <input type="number" class="one-line" name="followers">

                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

