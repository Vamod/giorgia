@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 80px; padding-top: 80px;">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Modifica</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td><a href="{{ route('posts.edit', $post->id) }}">Modifica</a></td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="destroy"  onclick="return confirm('Giorgia sei sicura di voler cancellare?')" type="submit" class="btn btn-primary">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>   
</div>




@endsection
