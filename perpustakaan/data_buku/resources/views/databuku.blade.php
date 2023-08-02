@extends('templete')
@section('databuku')

<div class="container mt-3">

    <h1 class="container mb-4 text-center">Data Buku</h1>

<table class="table table-bordered ">
    <thead>
      <tr>
        <th scope="col">id Buku</th>
        <th scope="col">Nama Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Tindakan</th>


      </tr>
    </thead>
    <tbody>

    @foreach ($showpeminjam as $data)
        <tr>
        <th scope="row">{{ $data->idbuku }}</th>
        <td>{{ $data->namabuku }}</td>
        <td>{{ $data->pengarang }}</td>


        <td><a class="btn btn-warning" href="edit/{{ $data->id }}" role="button">Edit</a>
             <a class="btn btn-danger" href="hapus/{{ $data->id }}" role="button">Hpus</a></td>
      </tr>
    @endforeach

    </tbody>
  </table>


</div>




@endsection
