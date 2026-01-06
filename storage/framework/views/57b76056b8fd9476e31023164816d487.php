

<?php $__env->startSection('title', 'Editar Seguimiento Docente'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                        <h4 class="mb-0" style="color: #000000;">Editar Seguimiento</h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form action="<?php echo e(route('admin.docente.update', $docente)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="destinatario_id" class="form-label" style="color: #000000;">Destinatario
                                        <span style="color: #dc3545;">*</span></label>
                                    <select class="form-control <?php $__errorArgs = ['destinatario_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="destinatario_id" name="destinatario_id" required
                                        style="border: 1px solid #808080; color: #000000;">
                                        <option value="">Seleccione un Destinatario...</option>
                                        <?php $__currentLoopData = $destinatarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinatario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($destinatario->id); ?>" <?php echo e(old('destinatario_id', $docente->destinatario_id) == $destinatario->id ? 'selected' : ''); ?>>
                                                <?php echo e($destinatario->nombre_completo); ?> - <?php echo e($destinatario->numero_documento); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['destinatario_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="tipo" class="form-label" style="color: #000000;">Tipo <span
                                            style="color: #dc3545;">*</span></label>
                                    <select class="form-control <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tipo" name="tipo"
                                        required style="border: 1px solid #808080; color: #000000;">
                                        <option value="">Seleccione...</option>
                                        <option value="academico" <?php echo e(old('tipo', $docente->tipo) === 'academico' ? 'selected' : ''); ?>>Académico</option>
                                        <option value="convivencial" <?php echo e(old('tipo', $docente->tipo) === 'convivencial' ? 'selected' : ''); ?>>Convivencial</option>
                                        <option value="disciplinario" <?php echo e(old('tipo', $docente->tipo) === 'disciplinario' ? 'selected' : ''); ?>>Disciplinario</option>
                                        <option value="otro" <?php echo e(old('tipo', $docente->tipo) === 'otro' ? 'selected' : ''); ?>>Otro</option>
                                    </select>
                                    <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="fecha_registro" class="form-label" style="color: #000000;">Fecha <span
                                            style="color: #dc3545;">*</span></label>
                                    <input type="date" class="form-control <?php $__errorArgs = ['fecha_registro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="fecha_registro" name="fecha_registro"
                                        value="<?php echo e(old('fecha_registro', $docente->fecha_registro->format('Y-m-d'))); ?>" required
                                        style="border: 1px solid #808080; color: #000000;">
                                    <?php $__errorArgs = ['fecha_registro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="nivel_riesgo" class="form-label" style="color: #000000;">Nivel de Riesgo</label>
                                    <select class="form-control <?php $__errorArgs = ['nivel_riesgo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="nivel_riesgo" name="nivel_riesgo"
                                        style="border: 1px solid #808080; color: #000000;">
                                        <option value="bajo" <?php echo e(old('nivel_riesgo', $docente->nivel_riesgo) === 'bajo' ? 'selected' : ''); ?>>Bajo</option>
                                        <option value="medio" <?php echo e(old('nivel_riesgo', $docente->nivel_riesgo) === 'medio' ? 'selected' : ''); ?>>Medio</option>
                                        <option value="alto" <?php echo e(old('nivel_riesgo', $docente->nivel_riesgo) === 'alto' ? 'selected' : ''); ?>>Alto</option>
                                    </select>
                                    <?php $__errorArgs = ['nivel_riesgo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" id="riesgo_detectado"
                                            name="riesgo_detectado" value="1" <?php echo e(old('riesgo_detectado', $docente->riesgo_detectado) ? 'checked' : ''); ?>

                                            style="border: 1px solid #808080;">
                                        <label class="form-check-label" for="riesgo_detectado" style="color: #000000;">
                                            Se detectaron signos de riesgo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="observacion" class="form-label" style="color: #000000;">Observación <span
                                            style="color: #dc3545;">*</span></label>
                                    <textarea class="form-control <?php $__errorArgs = ['observacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="observacion" name="observacion" rows="4"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('observacion', $docente->observacion)); ?></textarea>
                                    <?php $__errorArgs = ['observacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="acuerdos" class="form-label" style="color: #000000;">Acuerdos y Compromisos</label>
                                    <textarea class="form-control <?php $__errorArgs = ['acuerdos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="acuerdos" name="acuerdos" rows="3"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('acuerdos', $docente->acuerdos)); ?></textarea>
                                    <?php $__errorArgs = ['acuerdos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('admin.docente.index')); ?>" class="btn"
                                    style="background-color: #808080; color: #ffffff; border: 1px solid #808080;">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn"
                                    style="background-color: #dc3545; color: #ffffff; border: none;">
                                    <i class="bx bx-save" style="color: #ffffff;"></i> Actualizar Registro
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Practicas_Proyecto_Salesiano_III-TSDS\prueba\resources\views/admin/docente/edit.blade.php ENDPATH**/ ?>