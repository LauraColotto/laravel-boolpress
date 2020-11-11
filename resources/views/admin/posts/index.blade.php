@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Slug</th>
            <th scope="col">Contenuto</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->user_id}}</td>
                    <td>{{$article->slug}}</td>
                    <td>{{$article->content}}</td>
                    <td><a href="{{route("admin.posts.show", $article->slug)}}">View</a> Edit Delete</td>
                </tr>
            </tbody>
                @endforeach 
        </table>
    </div>
    
@endsection