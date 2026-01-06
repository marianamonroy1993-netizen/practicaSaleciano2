<?php $__env->startSection('title', 'Editar Medición'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                        <h4 class="mb-0" style="color: #000000;">Editar Medición</h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form action="<?php echo e(route('admin.mediciones.update', $medicion)); ?>" method="POST" id="medicionForm">
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
                                            <option value="<?php echo e($destinatario->id); ?>" <?php echo e(old('destinatario_id', $medicion->destinatario_id) == $destinatario->id ? 'selected' : ''); ?>>
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

                                <div class="col-md-6 mb-3">
                                    <label for="fecha_medicion" class="form-label" style="color: #000000;">Fecha de Medición
                                        <span style="color: #dc3545;">*</span></label>
                                    <input type="date" class="form-control <?php $__errorArgs = ['fecha_medicion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="fecha_medicion" name="fecha_medicion"
                                        value="<?php echo e(old('fecha_medicion', $medicion->fecha_medicion->format('Y-m-d'))); ?>"
                                        required style="border: 1px solid #808080; color: #000000;">
                                    <?php $__errorArgs = ['fecha_medicion'];
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
                                <div class="col-md-6 mb-3">
                                    <label for="peso" class="form-label" style="color: #000000;">Peso (kg) <span
                                            style="color: #dc3545;">*</span></label>
                                    <input type="number" step="0.01"
                                        class="form-control <?php $__errorArgs = ['peso'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="peso" name="peso"
                                        value="<?php echo e(old('peso', $medicion->peso)); ?>" min="1" max="300" required
                                        style="border: 1px solid #808080; color: #000000;" oninput="calcularIMC()">
                                    <?php $__errorArgs = ['peso'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <small class="form-text" style="color: #000000;">Ingrese el peso en kilogramos</small>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="talla" class="form-label" style="color: #000000;">Talla (metros) <span
                                            style="color: #dc3545;">*</span></label>
                                    <input type="number" step="0.01"
                                        class="form-control <?php $__errorArgs = ['talla'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talla" name="talla"
                                        value="<?php echo e(old('talla', $medicion->talla)); ?>" min="0.5" max="2.5" required
                                        style="border: 1px solid #808080; color: #000000;" oninput="calcularIMC()">
                                    <?php $__errorArgs = ['talla'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback" style="color: #dc3545;"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <small class="form-text" style="color: #000000;">Ingrese la talla en metros (ej:
                                        1.75)</small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="card" style="background-color: #f8f9fa; border: 1px solid #808080;">
                                        <div class="card-body">
                                            <h5 style="color: #000000;">Cálculo de IMC</h5>
                                            <div id="imcResultado" style="color: #000000;">
                                                <p>Complete los campos de peso y talla para calcular el IMC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="observaciones" class="form-label"
                                        style="color: #000000;">Observaciones</label>
                                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"
                                        style="border: 1px solid #808080; color: #000000;"><?php echo e(old('observaciones', $medicion->observaciones)); ?></textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('admin.mediciones.index')); ?>" class="btn"
                                    style="background-color: #808080; color: #ffffff; border: 1px solid #808080;">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn"
                                    style="background-color: #dc3545; color: #ffffff; border: none;">
                                    <i class="bx bx-save" style="color: #ffffff;"></i> Actualizar Medición
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calcularIMC() {
            const peso = parseFloat(document.getElementById('peso').value);
            const talla = parseFloat(document.getElementById('talla').value);
            const resultadoDiv = document.getElementById('imcResultado');

            if (peso && talla && talla > 0) {
                const imc = peso / (talla * talla);
                const imcRedondeado = imc.toFixed(2);

                let clasificacion = '';
                let color = '';

                if (imc < 18.5) {
                    clasificacion = 'Desnutrición';
                    color = '#ffc107';
                } else if (imc < 25) {
                    clasificacion = 'Peso Normal';
                    color = '#28a745';
                } else if (imc < 30) {
                    clasificacion = 'Sobrepeso';
                    color = '#fd7e14';
                } else {
                    clasificacion = 'Obesidad';
                    color = '#dc3545';
                }

                resultadoDiv.innerHTML = `
                <p><strong>IMC:</strong> <span style="font-size: 1.2em; color: ${color};">${imcRedondeado}</span></p>
                <p><strong>Clasificación:</strong> <span style="color: ${color}; font-weight: bold;">${clasificacion}</span></p>
            `;
            } else {
                resultadoDiv.innerHTML = '<p>Complete los campos de peso y talla para calcular el IMC</p>';
            }
        }

        // Calcular IMC al cargar la página
        window.onload = function () {
            calcularIMC();
        };
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Practicas_Proyecto_Salesiano_III-TSDS\prueba\resources\views/admin/mediciones/edit.blade.php ENDPATH**/ ?>