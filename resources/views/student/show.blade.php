@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Mahasiswa</div>

                <div class="card-body">
                    <!-- Tampilan Gambar Profil atau Ikon -->
                    <div class="text-center mb-3">
                        @if ($student->profile_image)
                            <img src="{{ asset('storage/' . $student->profile_image) }}" class="img-fluid rounded-circle" alt="Profile Image" style="width: 150px; height: 150px;">
                        @else
                            <i class="fas fa-user-circle" style="font-size: 100px;"></i>
                        @endif
                    </div>

                    <!-- Informasi Mahasiswa -->
                    <p><strong>Nama:</strong> {{ $student->name }}</p>
                    <p><strong>NIM:</strong> {{ $student->nim }}</p>
                    <p><strong>Kelas:</strong> {{ $student->kelas }}</p>
                    <p><strong>Tempat Lahir:</strong> {{ $student->tempat_lahir }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($student->tanggal_lahir)->format('d-m-Y') }}</p>

                    <!-- Tombol Aksi -->
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
