<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0" style="color: #000000;">Lista de Usuarios</h4>
                        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn" style="background-color: #dc3545; color: #ffffff; border: none;">
                            <i class="bx bx-plus" style="color: #ffffff;"></i> Nuevo Usuario
                        </a>
                    </div>
                </div>
                <div class="card-body" style="background-color: #ffffff;">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #d4edda; border: 1px solid #808080; color: #000000;">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered" style="border: 1px solid #808080; color: #000000;">
                            <thead style="background-color: #f8f9fa; border-bottom: 2px solid #808080;">
                                <tr>
                                    <th style="color: #000000; border: 1px solid #808080;">ID</th>
                                    <th style="color: #000000; border: 1px solid #808080;">Nombre</th>
                                    <th style="color: #000000; border: 1px solid #808080;">Email</th>
                                    <th style="color: #000000; border: 1px solid #808080;">Roles</th>
                                    <th style="color: #000000; border: 1px solid #808080;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td style="color: #000000; border: 1px solid #808080;"><?php echo e($user->id); ?></td>
                                        <td style="color: #000000; border: 1px solid #808080;"><?php echo e($user->name); ?></td>
                                        <td style="color: #000000; border: 1px solid #808080;"><?php echo e($user->email); ?></td>
                                        <td style="color: #000000; border: 1px solid #808080;">
                                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge" style="background-color: #dc3545; color: #ffffff; border: 1px solid #808080;"><?php echo e($role->name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td style="color: #000000; border: 1px solid #808080;">
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('admin.users.show', $user)); ?>" class="btn btn-sm" style="background-color: #dc3545; color: #ffffff; border: 1px solid #808080;">
                                                    <i class="bx bx-show" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="btn btn-sm" style="background-color: #dc3545; color: #ffffff; border: 1px solid #808080;">
                                                    <i class="bx bx-edit" style="color: #ffffff;"></i>
                                                </a>
                                                <form action="<?php echo e(route('admin.users.destroy', $user)); ?>" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm" style="background-color: #dc3545; color: #ffffff; border: 1px solid #808080;">
                                                        <i class="bx bx-trash" style="color: #ffffff;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center" style="color: #000000; border: 1px solid #808080;">No hay usuarios registrados.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\practicaSaleciano2\resources\views/admin/users/index.blade.php ENDPATH**/ ?>