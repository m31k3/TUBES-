@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
            <div id="page-indicator" class="mt-2 mb-3">You are on the penempatan divisi page</div>
            <form class="mt-3" action="{{ route('placement.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="internName">Nama Pemagang</label>
                    <input type="text" class="form-control" id="internName" name="intern_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="responsibleName">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" id="responsibleName" name="responsible_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="mentorName">Nama Pembimbing</label>
                    <input type="text" class="form-control" id="mentorName" name="mentor_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="division">Divisi</label>
                    <input type="text" class="form-control" id="division" name="division" required>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option>Sedang Berlangsung</option>
                        <option>Sudah Berakhir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

            <h3 class="mt-4">List Penempatan Divisi</h3>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('placement.export') }}" class="btn btn-success">Export to Excel</a>
            </div>
            <table class="table table-bordered mt-3" id="placementTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Pemagang</th>
                        <th>Nama Penanggung Jawab</th>
                        <th>Nama Pembimbing</th>
                        <th>Divisi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($placements as $placement)
                        <tr>
                            <td>{{ $placement->intern_name }}</td>
                            <td>{{ $placement->responsible_name }}</td>
                            <td>{{ $placement->mentor_name }}</td>
                            <td>{{ $placement->division }}</td>
                            <td>{{ $placement->status }}</td>
                            <td>
                                <a href="{{ route('placement.edit', $placement->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('placement.destroy', $placement->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@endsection
