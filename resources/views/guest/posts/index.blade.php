@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach ($articles as $article)

            <div class="card mb-4">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$article->title}}</h3>
                    <p class="card-text"><small class="text-muted">Posted by {{$article->user->name}}</small></p>
                    <p class="card-text">{{$article->content}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            
        @endforeach

    </div>

@endsection