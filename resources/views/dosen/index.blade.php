@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
    <fieldset>
        <legend>Data Dosen</legend>
        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3" style="float:right">Tambah Data</a>
        <div class="table-responsive ">
        <table class="table" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIPD</th>
                <th>Aksi</th>
            </tr>
            @forelse ($dosens as $dosen)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dosen->nama}}</td>
                <td>{{$dosen->nipd}}</td>
                <td>
                    <form action="{{route('dosen.destroy',$dosen->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('delete')
                        <a href="{{route('dosen.edit',$dosen->id)}}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{route('dosen.edit',$dosen->id)}}" class="btn btn-warning">Show</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Data dosen belum ada.</td>
            </tr>
            @endforelse
        </table>
        </div>
    </fieldset>
        </div>
    </div> 
</div>
@endsection