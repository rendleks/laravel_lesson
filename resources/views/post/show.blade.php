@extends('layouts.main')
@section('content')
    <div>

        <div> {{ $post->id }}. {{ $post->title }} </div>
        <div> {{ $post->content }} </div>
        <div>
            <a href="{{route('post.edit', $post->id)}}">edit</a>
        </div>
        <div>
            <a href="{{ route('post.index') }}">back</a>
        </div>
        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </div>
</div>
@endsection

