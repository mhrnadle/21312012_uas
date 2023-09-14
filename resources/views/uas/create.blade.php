@extends('layout.master')

@section('judul')
Edit Data
@endsection

@section('content')
<form  method="post" action="/cast/{{ $cast->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Npm</label>
        <input type="number" name="npm" value="{{ $cast->npm }}" class="form-control">
    </div>
    @error('npm')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $cast->alamat }}" class="form-control">
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

