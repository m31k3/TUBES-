@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
            <div id="page-indicator" class="mt-2 mb-3">You are on the Home page</div>
            <div class="banner">
                <img src="/images/photo4.jpg" alt="Banner" class="img-fluid banner-img">
            </div>
            <div class="content mt-4">
                <h1 class="mt-4">Selamat Datang di Witel</h1>
                <p>Website ini menyediakan berbagai layanan untuk pendataan dan pengelolaan magang di Witel Telkom Surabaya. Anda dapat melakukan pendataan magang, pengajuan ID card, dan penempatan
                    divisi atau pemberian pembimbing melalui fitur-fitur yang tersedia.
                </p>
            </div>
            <div class="photo-gallery mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/photo1.jpg" alt="Photo 1" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/photo2.jpg" alt="Photo 2" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/photo3.jpg" alt="Photo 3" class="img-fluid mb-4">
                    </div>
                </div>
            </div>
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
