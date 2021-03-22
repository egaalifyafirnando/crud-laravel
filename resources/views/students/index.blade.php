<!-- extend template main.blade.php -->
@extends('layout/main')

<!-- extend template title pada file main.blade.php -->
@section('title', 'Data Students')

<!-- extend template container pada file main.blade.php -->
@section('container')

    <div class="container">
        <h1 class="my-3">Data Students</h1>


        <a href="/students/create" class="btn btn-dark rounded-pill my-3">Add Student</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
            @foreach( $students as $student )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->nama }}
                <a href="/students/{{ $student->id }}"><span class="badge bg-dark rounded-pill">see detail</span></a>
            </li>
            @endforeach
        </ul>
    </div>

@endsection