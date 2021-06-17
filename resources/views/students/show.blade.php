@extends('layout.main')

@section('title', 'Detail Siswa')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Siswa</h1>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $student->nis }}</h6>
                  <p class="card-text">{{ $student->email }}</p>
                  <p class="card-text">{{ $student->major }}</p>

                  {{-- Edit --}}
                      <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>


                    {{-- Delete --}}
                  <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                  <a href="/students" class="card-link">Back</a>

                </div>
              </div>

        </div>
    </div>
</div>
@endsection
