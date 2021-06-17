@extends('layout.main')

@section('title', 'Daftar Siswa')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Add a Student </h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                  <label for="name" class="my-2">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input a name..." name="name" value = "{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="nis" class="my-2">NIS</label>
                  <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Input a nis..." name="nis" value="{{ old('nis') }}">
                  @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="email" class="my-2">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input an email..." name="email" value="{{ old('email') }}">
                  @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="major" class="my-2">Major</label>
                  <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" placeholder="Input a major..."  name="major" value="{{ old('major') }}">
                  @error('major')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2" > Add Data! </button>
            </form>
            <a href="/students"><button type="submit" class="btn btn-danger"> Back </button></a>
        </div>
    </div>
</div>
@endsection
