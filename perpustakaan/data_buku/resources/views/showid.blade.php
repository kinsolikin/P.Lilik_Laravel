@extends('templete')
@section('showid')
<div class="container mt-4">
<form action="/update/{{ $id->id }}" method="POST">
@csrf
@method('PUT')
    <input type="hidden" name="id" value="{{  $id->id }}">
    <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $id->nim }}">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Peminjam</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $id->nama }}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kelas</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="kelas" value="{{ $id->kelas }}">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
