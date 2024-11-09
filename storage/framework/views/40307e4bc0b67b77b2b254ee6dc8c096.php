<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>


                    <!-- Tombol Daftar Mahasiswa -->
                    <div class="mt-3">
                        <a href="<?php echo e(url('/students')); ?>" class="btn btn-primary">Daftar Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\Data Kuliah\Web III\unival-a2-mohamad_rizki_maulana_putra\unival-a2-mohamad_rizki_maulana_putra\resources\views/home.blade.php ENDPATH**/ ?>