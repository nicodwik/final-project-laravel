@extends('master')
@section('header')
    
@endsection
@section('content')
    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Buat Pertanyaan Baru</h3>
                                </div>
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form action="{{url('/question/create')}}" method="POST">
                                        	@csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Judul Pertanyaan</label>
                                                <input id="inputText3" type="text" class="form-control" name="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Pertanyaan</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"></textarea>
                                            </div>
                                            <div class="card-footer">
							                  <button type="submit" class="btn btn-primary">Submit</button>
							               </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
@endsection