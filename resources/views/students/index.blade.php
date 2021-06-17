@extends('layout.main')

@section('title', 'Daftar Siswa')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Student Data</h1>

            <a href="/students/create" class="btn btn-primary my-3"> Add a Student Data </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->name }}
                    <a href="/students/{{ $student->id }}" class="badge bg-info">Details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
