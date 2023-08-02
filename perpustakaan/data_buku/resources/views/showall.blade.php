@extends('templete')

@section('showall')

<div class="container mt-3">
<h1 class="container text-center mb-4">Database Keseluruhan</h1>

<table class="table table-bordered ">
    <thead>
      <tr>
        <th scope="col">Nim</th>
        <th scope="col">Nama Mahasiswa</th>
        <th scope="col">kelas</th>
        <th scope="col">Id Buku</th>
        <th scope="col">Nama Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($showpeminjam as $data)
        <tr>
        <th scope="row">{{ $data->nim }}</th>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->kelas }}</td>
        <td>{{ $data->idbuku }}</td>
        <td>{{ $data->namabuku }}</td>
        <td>{{ $data->pengarang }}</td>

        <td><a class="btn btn-warning" href="edit/{{ $data->id }}" role="button">Edit</a>
             <a class="btn btn-danger" href="hapus/{{ $data->id }}" role="button">Hpus</a></td>
      </tr>
    @endforeach

    </tbody>
  </table>

@endsection
</div>
