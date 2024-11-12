@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
        </div>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
            <div id="page-indicator" class="mt-2 mb-3">You are on the Pendataan Magang page</div>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('data.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="fileInput">Unggah File Excel</label>
                    <input type="file" class="form-control" id="fileInput" name="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Unggah dan Import</button>
                <a href="{{ route('data.deleteAll') }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all data?')">Hapus Semua Data</a>
            </form>

            <h3 class="mt-4">List Pendataan Magang</h3>
            <table class="table table-bordered mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email Address</th>
                        <th>Universitas / Sekolah</th>
                        <th>Scan Surat Pengajuan</th>
                        <th>Scan Kartu Pelajar / KTM</th>
                        <th>Scan KTP / KK</th>
                        <th>Scan Surat Pernyataan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($internships as $internship)
                        <tr>
                            <td>{{ $internship->name }}</td>
                            <td>{{ $internship->email }}</td>
                            <td>{{ $internship->university }}</td>
                            <td><a href="{{ $internship->letter }}">Lihat File</a></td>
                            <td><a href="{{ $internship->student_card }}">Lihat File</a></td>
                            <td><a href="{{ $internship->identity_card }}">Lihat File</a></td>
                            <td><a href="{{ $internship->statement_letter }}">Lihat File</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
