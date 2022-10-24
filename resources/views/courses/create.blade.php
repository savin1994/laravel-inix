@extends('backend.main')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text_primary float-left">
            Data Courses
        </h3>
        <a href="{{ route('courses.index') }}" class="btn btn-primary float-end">List</a>
    </div>
</div>

<div class="card-body">
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label class="form-label">Nama Course</label>
            <input value="{{ old('course_name') }}" type="text"
            class="form-control @error('course_name') is-invalid @enderror" name="course_name">
        @error('course_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Course</label>
            <input value="{{ old('price') }}" type="text"
            class="form-control @error('price') is-invalid @enderror" name="price">
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input value="{{ old('image') }}" type="file"
            class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea value="{{ old('description') }}" type="text"
            class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
