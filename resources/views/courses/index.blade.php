@extends('backend.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="m-0 font-weight-bold text_primary float-left">
                Data Courses
            </h3>
            <a href="{{ route('courses.create') }}" class="btn btn-primary float-end">Add</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Course</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $key => $item)
                <tr>
                    <td> {{ $no++ }}</td>
                    <td>
                        <img height="50"src="{{ asset('images/' . $item->image) }}"
                            alt="{{ asset('images/' . $item->image) }}">
                    </td>
                    <td>{{ $item->course_name }}</td>
                    <td>$ {{ $item->price }}</td>
                    <td>
                        <form action="{{ route('courses.destroy' , $item->id)}}" method="POST">
                            <a href="{{ route('courses.edit', $item->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('courses.show', $item->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
