@extends('layout/main')

@section('title', 'Daftar siswa')

@section('container')
 <div class="container">
  <div class="row">
    <div class="col-10">
    
    <h1 class="mt-2">Daftar Siswa</h1>

    <table class="table text-light">
      <thead class="thead-green">
        <tr bgcolor='#20B2AA' >
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NISN</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $siswa as $mhs )
        <tr>
          <th scope="row">{{ $loop-> iteration }}</th>
          <td>{{ $mhs->nama }}</td>
          <td>{{ $mhs->nik }}</td>
          <td>{{ $mhs->email }}</td>
          <td>{{ $mhs->jurusan }}</td>
          <td>
             <a href="" class="badge badge-success">edit</a>
             <a href="" class="badge badge-danger">delete</a>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
   
    </div>
  </div>
 </div>
 @endsection