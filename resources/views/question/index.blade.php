@extends('master')

@section('header')
    
@endsection

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">List Pertanyaan Anda</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row"><div class="col-sm-1 col-md-1">
                            <div class="dataTables_length" id="DataTables_Table_0_length">    
                            </div></div>
                            <div ><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                        </div>
                    <div class="row">
                <div class="col-sm-12">

                    <table class="table table-striped table-bordered first dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id: activate to sort column descending" style="width: 148px;">No</th> 
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id: activate to sort column descending" style="width: 148px;">Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 252px;">Judul Pertanyaan</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 105px;">Isi Pertanyaan</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 49px;">Votes</th> 
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 100px;">Start date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 84px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $index => $question)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$question->id}}</td>
                                    <td>{{$question->judul}}</td>
                                    <td>{{$question->isi}}</td>
                                    <td>{{$question->votes}}</td>
                                    <td>{{$question->created_at}}</td>
                                    <td style="display: flex;">
                                        <a href="{{url('/pertanyaan/show/'.$question->id)}}" class="btn btn-info btn-sm">Show </a>
                                  
                                        <a href="{{url('/pertanyaan/edit/'.$question->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{url('/pertanyaan/delete/'.$question->id)}}" method="post"> 
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" name="delete" class="btn btn-danger btn-sm"></form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                       
                    </table></div></div><div class="row"><div class="col-ml-2"></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection