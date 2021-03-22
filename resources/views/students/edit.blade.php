<!-- extend template main.blade.php -->
@extends('layout/main')

<!-- extend template title pada file main.blade.php -->
@section('title', 'Edit Students')

<!-- extend template container pada file main.blade.php -->

@section('container')
    <div class="container">
        <h1 class="mt-3">Edit Students</h1>


        <div class="container">
            <div class="row">

                    <div class="col-8">
                    <form method="POST" action="/students/{{ $student->id }}">
                    @method('PUT')
                    @csrf
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}">
                            @error('nama')
                                <div id="nama" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nim" class="form-label">nim</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $student->nim }}">
                            @error('nim')
                                <div id="nim" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ $student->email }}">
                            @error('email')
                                <div id="email" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="jurusan" class="form-label">jurusan</label>
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->jurusan }}">
                            @error('jurusan')
                                <div id="jurusan" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                        <a href="/students"><span class="btn btn-secondary rounded-pill">Back</span></a>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection