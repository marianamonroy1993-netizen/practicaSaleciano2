<?php $__env->startSection('title', 'Crear Registro de Psicología'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                        <h4 class="mb-0" style="color: #000000;">Registrar Nuevo Registro</h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form action="<?php echo e(route('admin.psicologia.store')); ?>" method="POST" id="psicologiaForm">
                            <?php echo csrf_field(); ?>

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
                                            <option value="<?php echo e($destinatario->id); ?>" <?php echo e(old('destinatario_id') == $destinatario->id ? 'selected' : ''); ?>>
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
                                        <option value="evaluacion" <?php echo e(old('tipo') === 'evaluacion' ? 'selected' : ''); ?>>
                                            Evaluacion</option>
                                        <option value="seguimiento" <?php echo e(old('tipo') === 'seguimiento' ? 'selected' : ''); ?>>
                                            Seguimiento</option>
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
                                        value="<?php echo e(old('fecha_registro', date('Y-m-d'))); ?>" required
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
                                    <label for="nivel_riesgo" class="form-label" style="color: #000000;">Nivel de Riesgo
                                        <span style="color: #dc3545;">*</span></label>
                                    <select class="form-control <?php $__errorArgs = ['nivel_riesgo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="nivel_riesgo" name="nivel_riesgo" required
                                        style="border: 1px solid #808080; color: #000000;">
                                        <option value="bajo" <?php echo e(old('nivel_riesgo', 'bajo') === 'bajo' ? 'selected' : ''); ?>>
                                            Bajo</option>
                                        <option value="medio" <?php echo e(old('nivel_riesgo') === 'medio' ? 'selected' : ''); ?>>Medio
                                        </option>
                                        <option value="alto" <?php echo e(old('nivel_riesgo') === 'alto' ? 'selected' : ''); ?>>Alto
                                        </option>
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
                                <div class="col-md-4 mb-3">
                                    <label for="estado_emocional" class="form-label" style="color: #000000;">Estado
                                        Emocional</label>
                                    <textarea class="form-control" id="estado_emocional" name="estado_emocional" rows="2"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('estado_emocional')); ?></textarea>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="conducta" class="form-label" style="color: #000000;">Conducta</label>
                                    <textarea class="form-control" id="conducta" name="conducta" rows="2"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('conducta')); ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="riesgo_detectado"
                                            name="riesgo_detectado" value="1" <?php echo e(old('riesgo_detectado') ? 'checked' : ''); ?>

                                            style="border: 1px solid #808080;">
                                        <label class="form-check-label" for="riesgo_detectado" style="color: #000000;">
                                            Se detectaron signos de riesgo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="bloqueEvaluacion" style="display: none;">
                                <div class="col-md-12 mb-3">
                                    <label for="diagnostico_inicial" class="form-label" style="color: #000000;">Diagnostico
                                        Inicial <span style="color: #dc3545;">*</span></label>
                                    <textarea class="form-control <?php $__errorArgs = ['diagnostico_inicial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="diagnostico_inicial" name="diagnostico_inicial" rows="3"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('diagnostico_inicial')); ?></textarea>
                                    <?php $__errorArgs = ['diagnostico_inicial'];
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

                            <div class="row" id="bloqueSeguimiento" style="display: none;">
                                <div class="col-md-12 mb-3">
                                    <label for="evolucion" class="form-label" style="color: #000000;">Evolucion <span
                                            style="color: #dc3545;">*</span></label>
                                    <textarea class="form-control <?php $__errorArgs = ['evolucion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="evolucion"
                                        name="evolucion" rows="3"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('evolucion')); ?></textarea>
                                    <?php $__errorArgs = ['evolucion'];
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
                                    <label for="observaciones" class="form-label"
                                        style="color: #000000;">Observaciones</label>
                                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('observaciones')); ?></textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('admin.psicologia.index')); ?>" class="btn"
                                    style="background-color: #808080; color: #ffffff; border: 1px solid #808080;">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn"
                                    style="background-color: #dc3545; color: #ffffff; border: none;">
                                    <i class="bx bx-save" style="color: #ffffff;"></i> Guardar Registro
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleBloques() {
            const tipo = document.getElementById('tipo').value;
            const bloqueEvaluacion = document.getElementById('bloqueEvaluacion');
            const bloqueSeguimiento = document.getElementById('bloqueSeguimiento');

            if (tipo === 'evaluacion') {
                bloqueEvaluacion.style.display = 'flex';
                bloqueSeguimiento.style.display = 'none';
            } else if (tipo === 'seguimiento') {
                bloqueEvaluacion.style.display = 'none';
                bloqueSeguimiento.style.display = 'flex';
            } else {
                bloqueEvaluacion.style.display = 'none';
                bloqueSeguimiento.style.display = 'none';
            }
        }

        document.getElementById('tipo').addEventListener('change', toggleBloques);
        window.onload = toggleBloques;
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Practicas_Proyecto_Salesiano_III-TSDS\prueba\resources\views/admin/psicologia/create.blade.php ENDPATH**/ ?>