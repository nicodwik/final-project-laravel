@extends('master')

@section('header')
    
@endsection

@section('content')
    <form action="{{ url('/edit/pertanyaan/'.$questions->id) }}" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="card-body">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Judul Pertanyaan</label>
                <input id="inputText3" value="{{$questions->judul}}" type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Pertanyaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi">{{$questions->isi}}</textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection