@extends('template.dashboard')

@section('title', 'Create Article')

@section('content')
    <div class="container mt-4">
        <h2>Create New Article</h2>
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="4" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="Tips" {{ old('category') == 'Tips' ? 'selected' : '' }}>Tips</option>
                    <option value="Education" {{ old('category') == 'Education' ? 'selected' : '' }}>Education</option>
                    <option value="Hobby" {{ old('category') == 'Hobby' ? 'selected' : '' }}>Hobby</option>
                    <option value="Eco Destination" {{ old('category') == 'Eco Destination' ? 'selected' : '' }}>Eco
                        Destination</option>
                </select>
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image_path" name="image_path" required>
                @error('image_path')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Article</button>
        </form>
    </div>
@endsection
