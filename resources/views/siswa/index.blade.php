@extends('layout.main')

@section('title', 'Daftar Siswa')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Email</th>
                        <th scope="col">Major</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $s)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->major }}</td>
                        <td>
                            <a href="" class="badge bg-warning">Edit</a>
                            <a href="" class="badge bg-danger">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection
