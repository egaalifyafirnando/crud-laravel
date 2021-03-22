<!-- membuat folder mahasiswa -->


<!-- extend template main.blade.php -->
@extends('layout/main')

<!-- extend template title pada file main.blade.php -->
@section('title', 'Data Mahasiswa')

<!-- extend template container pada file main.blade.php -->
@section('container')

    <div class="container">
        <h1 class="mt-3">Data Mahasiswa</h1>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Option</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $mahasiswa as $mhs )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>
                        <a href=""><span class="badge bg-primary">edit</span></a>
                        <a href=""><span class="badge bg-danger">delete</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>

@endsection