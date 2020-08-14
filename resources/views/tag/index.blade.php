@extends('master')

@section('header')
    All Tag
@endsection

@section('content')
    <div class="card rounded p-3">
        <div class="row justify-content-end px-3 pb-3">
            <a href="{{route('tag.create')}}" class="btn btn-md btn-primary"><i class="fa fa-plus"></i> &nbsp; Buat Baru</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover thead-dark px-4 text-center">
                <tr>
                    <th>Nama Tag</th>
                    <th>Action</th>
                </tr>
                @forelse ($items as $item)
                    <tr>
                        <td>{{$item->nama_tag}}</td>
                        <td>
                            <a href="{{route('tag.show', $item->id)}}" class="btn btn-sm btn-dark">Detail</a>
                            <a href="{{route('tag.edit', $item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{route('tag.destroy', $item->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @empty
                    <td colspan="2" class="text-danger text-center">Tidak ada Tag</td>
                @endforelse
            </table>
        </div>
    </div>
@endsection