

<?php $__env->startSection('content'); ?>
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
        </div>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
            <div id="page-indicator" class="mt-2 mb-3">You are on the id card page</div>
            <form class="mt-3" action="<?php echo e(route('idcard.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="name">Nama Peminjam</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cardNumber">Nomor Kartu</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number" required>
                </div>
                <div class="form-group mb-3">
                    <label for="startDate">Tanggal Mulai PKL</label>
                    <input type="date" class="form-control" id="startDate" name="start_date" required>
                </div>
                <div class="form-group mb-3">
                    <label for="endDate">Tanggal Selesai PKL</label>
                    <input type="date" class="form-control" id="endDate" name="end_date" required>
                </div>
                <div class="form-group mb-3">
                    <label for="returnDate">Tanggal Kartu PKL Dikembalikan</label>
                    <input type="date" class="form-control" id="returnDate" name="return_date">
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status Peminjaman</label>
                    <select class="form-control" id="status" name="status">
                        <option>Sedang Berlangsung</option>
                        <option>Sudah Berakhir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </form>

            <h3 class="mt-4">List Pengajuan ID Card</h3>
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-end mb-2">
                <a href="<?php echo e(route('idcard.export')); ?>" class="btn btn-success">Export to Excel</a>
            </div>
            <table class="table table-bordered mt-3" id="idCardTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Peminjam</th>
                        <th>Nomor Kartu</th>
                        <th>Tanggal Mulai PKL</th>
                        <th>Tanggal Selesai PKL</th>
                        <th>Tanggal Kartu PKL Dikembalikan</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $idcards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idcard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($idcard->name); ?></td>
                            <td><?php echo e($idcard->card_number); ?></td>
                            <td><?php echo e($idcard->start_date); ?></td>
                            <td><?php echo e($idcard->end_date); ?></td>
                            <td><?php echo e($idcard->return_date); ?></td>
                            <td><?php echo e($idcard->status); ?></td>
                            <td>
                                <a href="<?php echo e(route('idcard.edit', $idcard->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('idcard.destroy', $idcard->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel11_auth\resources\views/idcard.blade.php ENDPATH**/ ?>