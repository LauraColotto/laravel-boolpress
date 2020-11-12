@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crea il tuo post</h1>
        <form action="{{route("admin.posts.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Inserisci titolo">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug"  name="slug" placeholder="Inserisci slug">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image"  name="image" placeholder="Inserisci un immagine" accept="image/*">
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content"  name="content" clos="30" rows="10" placeholder="Inserisci testo"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            </form>
            

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    </div>

@endsection