<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                        <h4 class="mb-0" style="color: #000000;">
                            <i class="bx bx-home" style="color: #dc3545;"></i> Panel de Control
                        </h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                                    <div class="card-body text-center">
                                        <i class="bx bx-user" style="font-size: 3rem; color: #dc3545;"></i>
                                        <h5 class="mt-3" style="color: #000000;">Usuarios</h5>
                                        <p class="h3 font-weight-bold" style="color: #dc3545;"><?php echo e($stats['users']); ?></p>
                                        <p class="text-muted" style="color: #000000;">Gestiona los usuarios del sistema</p>
                                        <a href="<?php echo e(route('admin.users.index')); ?>" class="btn"
                                            style="background-color: #dc3545; color: #ffffff; border: none;">
                                            <i class="bx bx-right-arrow-alt" style="color: #ffffff;"></i> Ver Usuarios
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                                    <div class="card-body text-center">
                                        <i class="bx bx-group" style="font-size: 3rem; color: #dc3545;"></i>
                                        <h5 class="mt-3" style="color: #000000;">Destinatarios</h5>
                                        <p class="h3 font-weight-bold" style="color: #dc3545;"><?php echo e($stats['destinatarios']); ?>

                                        </p>
                                        <p class="text-muted" style="color: #000000;">Gestiona las fichas socioeconómicas
                                        </p>
                                        <a href="<?php echo e(route('admin.destinatarios.index')); ?>" class="btn"
                                            style="background-color: #dc3545; color: #ffffff; border: none;">
                                            <i class="bx bx-right-arrow-alt" style="color: #ffffff;"></i> Ver Destinatarios
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                                    <div class="card-body text-center">
                                        <i class="bx bx-line-chart" style="font-size: 3rem; color: #dc3545;"></i>
                                        <h5 class="mt-3" style="color: #000000;">Mediciones</h5>
                                        <p class="h3 font-weight-bold" style="color: #dc3545;"><?php echo e($stats['mediciones']); ?>

                                        </p>
                                        <p class="text-muted" style="color: #000000;">Registra peso, talla e IMC</p>
                                        <a href="<?php echo e(route('admin.mediciones.index')); ?>" class="btn"
                                            style="background-color: #dc3545; color: #ffffff; border: none;">
                                            <i class="bx bx-right-arrow-alt" style="color: #ffffff;"></i> Ver Mediciones
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                                    <div class="card-body text-center">
                                        <i class="bx bx-brain" style="font-size: 3rem; color: #dc3545;"></i>
                                        <h5 class="mt-3" style="color: #000000;">Psicología</h5>
                                        <p class="h3 font-weight-bold" style="color: #dc3545;"><?php echo e($stats['psicologia']); ?>

                                        </p>
                                        <p class="text-muted" style="color: #000000;">Seguimiento psicológico</p>
                                        <a href="<?php echo e(route('admin.psicologia.index')); ?>" class="btn"
                                            style="background-color: #dc3545; color: #ffffff; border: none;">
                                            <i class="bx bx-right-arrow-alt" style="color: #ffffff;"></i> Ver Psicología
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                                    <div class="card-body text-center">
                                        <i class="bx bx-shield" style="font-size: 3rem; color: #dc3545;"></i>
                                        <h5 class="mt-3" style="color: #000000;">Roles y Permisos</h5>
                                        <p class="text-muted" style="color: #000000;">Seguridad del sistema</p>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('admin.roles.index')); ?>" class="btn btn-sm"
                                                style="background-color: #dc3545; color: #ffffff; border: none;">Roles</a>
                                            <a href="<?php echo e(route('admin.permissions.index')); ?>" class="btn btn-sm"
                                                style="background-color: #808080; color: #ffffff; border: none;">Permisos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(auth()->guard()->check()): ?>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card" style="background-color: #f8f9fa; border: 1px solid #808080;">
                                        <div class="card-body">
                                            <h5 style="color: #000000;">Bienvenido, <?php echo e(Auth::user()->name); ?></h5>
                                            <p style="color: #000000;">Email: <?php echo e(Auth::user()->email); ?></p>
                                            <?php if(Auth::user()->roles->count() > 0): ?>
                                                <p style="color: #000000;">
                                                    Roles:
                                                    <?php $__currentLoopData = Auth::user()->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="badge"
                                                            style="background-color: #dc3545; color: #ffffff; border: 1px solid #808080;"><?php echo e($role->name); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\practicaSaleciano2\resources\views/home/home.blade.php ENDPATH**/ ?>