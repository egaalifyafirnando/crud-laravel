<!-- extend template main.blade.php -->
@extends('layout/main')

<!-- extend template title pada file main.blade.php -->
@section('title', 'Detail Students')

<!-- extend template container pada file main.blade.php -->

@section('container')
    <div class="container">
        <h1 class="mt-3">Detail Students</h1>


        <div class="container">
            <div class="row">

                    <div class="col-md-6">
                        <div class="card border-dark mb-3">
                            <div class="card-header">Student</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">{{ $student->nama }}</h5>
                                    <p class="card-text">{{ $student->nim }}</p>
                                    <p class="card-text">{{ $student->email }}</p>
                                    <p class="card-text">{{ $student->jurusan }}</p>
                                    <a href="/students/{{ $student->id }}/edit" class="btn btn-success mx-1 rounded-pill">Edit</a>
                                    <form action="{{ $student->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                            <button type="submit" class="btn btn-danger mx-1 rounded-pill">Delete</button>
                                    </form>
                                    <a href="/students"><span class="btn btn-primary mx-1 rounded-pill">Back</span></a>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection 