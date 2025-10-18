@extends('layouts.main')
@section('content')
    <form class="row g-3" action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" placeholder="Content ..." >{{ $post->content }}</textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" placeholder="image" value="{{ $post->image }}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary mb-3">Update</button>
        </div>

        <div class="form-group">
            <label for="category" class="mb-2">Select category:</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
            @foreach($categories as $category)
                <option
                    {{ $category->id === $post->category->id ? ' selected' : ''}}

                value="{{ $category->id }}" >{{ $category->title }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tags" class="mb-2">Tags:</label>
            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                        {{ $tag->id === $postTag->id ? ' selected' : ''}}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
    </form>
@endsection
