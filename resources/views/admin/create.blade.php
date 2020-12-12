@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 80px;">
        {{-- enctype aggiunto per img, serve per inviare dati che non siano testo --}}
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            {{-- Laravel automatically generates a CSRF "token" for each active user session managed by the application.
            This token is used to verify that the authenticated user is the one actually making the requests to the application. --}}
            @csrf
            @method('POST')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="title">Titolo</label>
                <input input="text" name="title" class="form-control" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="img">Immagine</label>
                <input type="file" name="img" accept="image/*">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows=8></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
