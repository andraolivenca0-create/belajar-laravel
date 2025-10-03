@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
    <fieldset>
        <legend>data post</legend>
        <a href=""{{ route('post.create') }} class="btn btn-primary" style="align:float-right">tambah data</a>
        <div class="table-responsive ">
        <table class="table" border="1">
            <tr>
                <th>no</th>
                <th>title</th>
                <th>content</th>
            </tr>
            @foreach ($post as $data)
            <tr>
                <th>{{$loop->iteration}}</th>
                <th>{{$data->title}}</th>
                <th>{{Str::limit($data->content,100)}}</th>
                <form action="{{route('post.destroy',$data->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{route('post.edit',$data->id)}}" class="btn btn-warning">edit</a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data?')">hapus</button>
            </tr>
            @endforeach
        </table>
        </div>
    </fieldset>
        </div>
    </div> 
</div>
@endsection