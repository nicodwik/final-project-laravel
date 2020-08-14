@extends('master')

@section('content')
    <div class="card rounded p-4">
        <form action="{{route('tag.update', $item->id)}}" method="post" class="form-group">
            @csrf
            @method('put')
            <label for="" class="">Nama Tag</label>
            <input type="text" class="form-control" name="nama_tag" required value="{{$item->nama_tag}}">
            <button type="submit" class="btn btn-md btn-primary mt-4 float-right">Simpan Perubahan</button>   
        </form>
    </div>
@endsection