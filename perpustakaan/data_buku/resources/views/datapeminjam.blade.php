@extends('templete')

@section('datapeminjam')


<div class="container mt-3">

    <h1 class="container mb-4 text-center">Data Peminjam</h1>


<table class="table table-bordered ">
    <thead>
      <tr>
        <th scope="col">Nim</th>
        <th scope="col">Nama Mahasiswa</th>
        <th scope="col">kelas</th>
        <th scope="col">Tindakan</th>


      </tr>
    </thead>
    <tbody>

    @foreach ($showpeminjam as $data)
        <tr>
        <th scope="row">{{ $data->nim }}</th>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->kelas }}</td>


        <td><a class="btn btn-warning" href="edit/{{ $data->id }}" role="button">Edit</a>
             <a class="btn btn-danger" href="hapus/{{ $data->id }}" role="button">Hpus</a></td>
      </tr>
    @endforeach

    </tbody>
  </table>


</div>


@endsection
