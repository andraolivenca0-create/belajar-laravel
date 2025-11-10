@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-10 mx-auto">
        <h2 class="text-center mb-4">Halo Eloquent 👋</h2>

        @foreach ($mahasiswa as $temp)
            <div class="card mb-4 border rounded-3 shadow-sm p-3">
                <h3 class="fw-bold">
                    {{ ............. }}
                    <small class="text-muted">(..........)</small>
                </h3>

                <p class="text-secondary">Kelas: {{ $temp->kelas }}</p>

                <h5>Hobi:</h5>
                <ul>
                    @forelse ($temp->hobi as $tampung)
                        <li>{{ ............ }}</li>
                    @empty
                        <li><em>Belum punya hobi</em></li>
                    @endforelse
                </ul>

                <div class="mt-3">
                    <ul>
                        <li>Nama Wali: <strong>............</strong></li>
                        <li>Dosen Pembimbing: <strong>.........</strong></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
