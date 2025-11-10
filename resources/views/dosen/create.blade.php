@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <fieldset>
                    <legend>Tambah Data Dosen</legend>

                    {{-- Tampilkan error validasi jika ada --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dosen.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nipd">NIPD</label>
                            <input type="text" name="nipd" class="form-control" value="{{ old('nipd') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </fieldset>
            </div>  
        </div>
    </div>
@endsection