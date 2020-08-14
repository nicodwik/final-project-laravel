@extends('master')

@section('header')
    Tambah Tag Baru
@endsection

@section('content')
    <div class="card rounded p-4">
        <form action="{{route('tag.store')}}" method="post" class="form-group">
            @csrf
            <label for="" class="">Nama Tag</label>
            <input type="text" class="form-control" name="nama_tag" required>
            <button type="submit" class="btn btn-md btn-primary mt-4 float-right">Simpan</button>   
        </form>
    </div>
@endsection