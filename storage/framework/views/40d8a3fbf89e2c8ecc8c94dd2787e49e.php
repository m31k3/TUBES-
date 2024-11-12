

<?php $__env->startSection('content'); ?>
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
            <a href="about" class="list-group-item list-group-item-action bg-light"><i class="fas fa-info-circle"></i> About</a>
        </div>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
            <div id="page-indicator" class="mt-2 mb-3">You are on the edit id card page</div>
            <form class="mt-3" action="<?php echo e(route('idcard.update', $idcard->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group mb-3">
                    <label for="name">Nama Peminjam</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($idcard->name); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cardNumber">Nomor Kartu</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number" value="<?php echo e($idcard->card_number); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="startDate">Tanggal Mulai PKL</label>
                    <input type="date" class="form-control" id="startDate" name="start_date" value="<?php echo e($idcard->start_date); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="endDate">Tanggal Selesai PKL</label>
                    <input type="date" class="form-control" id="endDate" name="end_date" value="<?php echo e($idcard->end_date); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="returnDate">Tanggal Kartu PKL Dikembalikan</label>
                    <input type="date" class="form-control" id="returnDate" name="return_date" value="<?php echo e($idcard->return_date); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status Peminjaman</label>
                    <select class="form-control" id="status" name="status">
                        <option <?php echo e($idcard->status == 'Sedang Berlangsung' ? 'selected' : ''); ?>>Sedang Berlangsung</option>
                        <option <?php echo e($idcard->status == 'Sudah Berakhir' ? 'selected' : ''); ?>>Sudah Berakhir</option>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel11_auth\resources\views/idcard_edit.blade.php ENDPATH**/ ?>