

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Mahasiswa</div>

                <div class="card-body">
                    <!-- Tombol Tambah Data -->
                    <div class="mb-3">
                        <a href="<?php echo e(route('students.create')); ?>" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th> <!-- Kolom ID -->
                                <th class="text-center">NIM</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Aksi</th> <!-- Kolom Aksi -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- ID yang berlanjut antar halaman -->
                                <td class="text-center"><?php echo e(($students->currentPage() - 1) * $students->perPage() + $loop->iteration); ?></td>
                                <td class="text-center"><?php echo e($s->nim); ?></td>
                                <td class="text-center"><?php echo e($s->name); ?></td>
                                <td class="text-center"><?php echo e($s->tempat_lahir); ?></td>
                                <td class="text-center"><?php echo e(\Carbon\Carbon::parse($s->tanggal_lahir)->format('d-m-Y')); ?></td>
                                <td class="text-center">
                                    <!-- Tombol Show dengan Ikon -->
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#studentModal<?php echo e($s->id); ?>">
                                        <i class="fas fa-eye"></i> <span class="ms-1">Show</span>
                                    </button>

                                    <!-- Modal Show -->
                                    <div class="modal fade" id="studentModal<?php echo e($s->id); ?>" tabindex="-1" aria-labelledby="studentModalLabel<?php echo e($s->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="studentModalLabel<?php echo e($s->id); ?>">Detail Mahasiswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Gambar atau Ikon Profil -->
                                                    <div class="text-center mb-3">
                                                        <!-- Jika ada gambar profil -->
                                                        <?php if($s->profile_image): ?>
                                                            <img src="<?php echo e(asset('storage/' . $s->profile_image)); ?>" class="img-fluid rounded-circle" alt="Profile Image" style="width: 150px; height: 150px;">
                                                        <?php else: ?>
                                                            <!-- Jika tidak ada gambar, gunakan ikon -->
                                                            <i class="fas fa-user-circle" style="font-size: 100px;"></i>
                                                        <?php endif; ?>
                                                    </div>

                                                    <strong>Nama:</strong> <?php echo e($s->name); ?> <br>
                                                    <strong>NIM:</strong> <?php echo e($s->nim); ?> <br>
                                                    <strong>Kelas:</strong> <?php echo e($s->kelas); ?> <br>
                                                    <strong>Tempat Lahir:</strong> <?php echo e($s->tempat_lahir); ?> <br>
                                                    <strong>Tanggal Lahir:</strong> <?php echo e(\Carbon\Carbon::parse($s->tanggal_lahir)->format('d-m-Y')); ?>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol Edit -->
                                    <a href="<?php echo e(route('students.edit', $s->id)); ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <!-- Form Delete -->
                                    <form action="<?php echo e(route('students.destroy', $s->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <!-- Pagination di bawah kanan -->
                    <div class="d-flex justify-content-end mt-3">
                        <?php echo e($students->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\b-unival\unival-a2\resources\views/student/index.blade.php ENDPATH**/ ?>