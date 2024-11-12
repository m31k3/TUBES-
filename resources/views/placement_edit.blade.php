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
            <div id="page-indicator" class="mt-2 mb-3">You are on the edit penempatan divisi page</div>
            <form class="mt-3" action="{{ route('placement.update', $placement->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="internName">Nama Pemagang</label>
                    <input type="text" class="form-control" id="internName" name="intern_name" value="{{ $placement->intern_name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="responsibleName">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" id="responsibleName" name="responsible_name" value="{{ $placement->responsible_name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="mentorName">Nama Pembimbing</label>
                    <input type="text" class="form-control" id="mentorName" name="mentor_name" value="{{ $placement->mentor_name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="division">Divisi</label>
                    <input type="text" class="form-control" id="division" name="division" value="{{ $placement->division }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option {{ $placement->status == 'Sedang Berlangsung' ? 'selected' : '' }}>Sedang Berlangsung</option>
                        <option {{ $placement->status == 'Sudah Berakhir' ? 'selected' : '' }}>Sudah Berakhir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

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
