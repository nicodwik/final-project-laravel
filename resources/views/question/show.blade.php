@extends('master')

@section('header')
    
@endsection

@section('content')
    <div class="card-body">
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Id</label>
            <input id="inputText3" value="{{$questions->id}}" type="text" class="form-control" name="judul" readonly="">
        </div>
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Judul Pertanyaan</label>
            <input id="inputText3" value="{{$questions->judul}}" type="text" class="form-control" readonly="" name="judul">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Pertanyaan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" readonly="" rows="3" name="isi">{{$questions->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Votes</label>
            <input id="inputText3" value="{{$questions->votes}}" type="text" readonly="" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Created At</label>
            <input id="inputText3" value="{{$questions->created_at}}" type="text" readonly="" class="form-control" name="judul">
        </div>
    </div>
@endsection