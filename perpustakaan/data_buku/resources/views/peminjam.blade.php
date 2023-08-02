@extends('templete')


@section('form')
<h1 class="container mb-2 mt-2 text-center">Data Peminjam Buku Perpustakaan 4F</h1>

<div class="container mt-4">
<form action="input" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim">

      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kelas</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="kelas">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Id Buku</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="idbuku">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Buku</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="namabuku">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Pengarang</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="pengarang">
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
</div>
</div>
