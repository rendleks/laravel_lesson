@extends('layouts.main')
@section('content')
    <form class="row g-3" action="{{ route('post.store') }}" method="post">
        @csrf
        <div>
            <label for="title" class="visually-hidden">Title</label>
            <input

                value="{{ old('title') }}"

                type="text" name="title" id="title" placeholder="title">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content" class="visually-hidden">Content</label>
            <textarea name="content" id="content" placeholder="Content ...">{{ old('content') }}
            </textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="image" class="visually-hidden">Image</label>
            <input
                value="{{ old('image') }}"
                type="text" name="image" id="image" placeholder="image">
            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="category" class="mb-2">Select category:</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? ' selected' : "" }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tags" class="mb-2">Tags:</label>
            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mb-3">Create</button>
        </div>
    </form>
@endsection
