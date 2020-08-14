@extends('master')

@section('header')
Details ( {{$item->nama_tag}} )
@endsection

@section('content')
    <div class="card rounded p-3">
        <div class="table-responsive">
            <table class="table table-hover thead-dark px-4 text-center">
                <tr>
                    <th>Nama Tag</th>
                    <th>Pertanyaan</th>
                </tr>
                <tr>
                    <td>{{$item->nama_tag}}</td>
                    {{-- <td>{{$item->pertanyaan->nama_pertanyaan}}</td> --}}
                </tr>
            </table>
        </div>
    </div>
@endsection