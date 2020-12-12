@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 80px;padding-top:80px;">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <img src=" {{ asset('storage/'.$post->img) }}" alt="{{ $post->slug }}" width="300px">
        <div class="form-group">
            <label for="img">Modifica immagine</label>
            <input type="file" name="img" value="" accept="image/*">
        </div>
        <div class="form-group">
            <label for="title">Titolo</label>
            <input input="text" name="title" value="{{ $post->title }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" rows="8">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection
