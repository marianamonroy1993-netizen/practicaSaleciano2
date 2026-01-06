<?php $__env->startSection('title', 'Crear Destinatario'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                        <h4 class="mb-0" style="color: #000000;">Crear Nuevo Destinatario</h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form action="<?php echo e(route('admin.destinatarios.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <!-- Datos Personales -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-user"
                                            style="color: #dc3545;"></i> Datos Personales</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="primer_nombre" class="form-label" style="color: #000000;">Primer
                                                Nombre <span style="color: #dc3545;">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['primer_nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="primer_nombre" name="primer_nombre" value="<?php echo e(old('primer_nombre')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['primer_nombre'];
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
                                            <label for="segundo_nombre" class="form-label" style="color: #000000;">Segundo
                                                Nombre</label>
                                            <input type="text" class="form-control" id="segundo_nombre"
                                                name="segundo_nombre" value="<?php echo e(old('segundo_nombre')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="primer_apellido" class="form-label" style="color: #000000;">Primer
                                                Apellido <span style="color: #dc3545;">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['primer_apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="primer_apellido" name="primer_apellido"
                                                value="<?php echo e(old('primer_apellido')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['primer_apellido'];
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
                                            <label for="segundo_apellido" class="form-label" style="color: #000000;">Segundo
                                                Apellido</label>
                                            <input type="text" class="form-control" id="segundo_apellido"
                                                name="segundo_apellido" value="<?php echo e(old('segundo_apellido')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="fecha_nacimiento" class="form-label" style="color: #000000;">Fecha
                                                de Nacimiento <span style="color: #dc3545;">*</span></label>
                                            <input type="date"
                                                class="form-control <?php $__errorArgs = ['fecha_nacimiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="fecha_nacimiento" name="fecha_nacimiento"
                                                value="<?php echo e(old('fecha_nacimiento')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['fecha_nacimiento'];
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
                                            <label for="genero" class="form-label" style="color: #000000;">Género <span
                                                    style="color: #dc3545;">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="genero"
                                                name="genero" style="border: 1px solid #808080; color: #000000;">
                                                <option value="masculino" <?php echo e(old('genero') == 'masculino' ? 'selected' : ''); ?>>Masculino</option>
                                                <option value="femenino" <?php echo e(old('genero') == 'femenino' ? 'selected' : ''); ?>>
                                                    Femenino</option>
                                                <option value="otro" <?php echo e(old('genero') == 'otro' ? 'selected' : ''); ?>>Otro
                                                </option>
                                            </select>
                                            <?php $__errorArgs = ['genero'];
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
                                            <label for="estado_civil" class="form-label" style="color: #000000;">Estado
                                                Civil <span style="color: #dc3545;">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['estado_civil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="estado_civil" name="estado_civil"
                                                style="border: 1px solid #808080; color: #000000;">
                                                <option value="soltero" <?php echo e(old('estado_civil') == 'soltero' ? 'selected' : ''); ?>>Soltero</option>
                                                <option value="casado" <?php echo e(old('estado_civil') == 'casado' ? 'selected' : ''); ?>>Casado</option>
                                                <option value="divorciado" <?php echo e(old('estado_civil') == 'divorciado' ? 'selected' : ''); ?>>Divorciado</option>
                                                <option value="viudo" <?php echo e(old('estado_civil') == 'viudo' ? 'selected' : ''); ?>>
                                                    Viudo</option>
                                                <option value="union_libre" <?php echo e(old('estado_civil') == 'union_libre' ? 'selected' : ''); ?>>Unión Libre</option>
                                            </select>
                                            <?php $__errorArgs = ['estado_civil'];
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
                                            <label for="tipo_documento" class="form-label" style="color: #000000;">Tipo de
                                                Documento <span style="color: #dc3545;">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['tipo_documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="tipo_documento" name="tipo_documento"
                                                style="border: 1px solid #808080; color: #000000;">
                                                <option value="cedula" <?php echo e(old('tipo_documento') == 'cedula' ? 'selected' : ''); ?>>Cédula</option>
                                                <option value="pasaporte" <?php echo e(old('tipo_documento') == 'pasaporte' ? 'selected' : ''); ?>>Pasaporte</option>
                                                <option value="tarjeta_identidad" <?php echo e(old('tipo_documento') == 'tarjeta_identidad' ? 'selected' : ''); ?>>Tarjeta
                                                    de Identidad</option>
                                                <option value="cedula_extranjeria" <?php echo e(old('tipo_documento') == 'cedula_extranjeria' ? 'selected' : ''); ?>>Cédula
                                                    de Extranjería</option>
                                            </select>
                                            <?php $__errorArgs = ['tipo_documento'];
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
                                            <label for="numero_documento" class="form-label" style="color: #000000;">Número
                                                de Documento <span style="color: #dc3545;">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['numero_documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="numero_documento" name="numero_documento"
                                                value="<?php echo e(old('numero_documento')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['numero_documento'];
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
                                            <label for="nacionalidad" class="form-label"
                                                style="color: #000000;">Nacionalidad <span
                                                    style="color: #dc3545;">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['nacionalidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="nacionalidad" name="nacionalidad"
                                                value="<?php echo e(old('nacionalidad', 'Colombiana')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['nacionalidad'];
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
                                </div>
                            </div>

                            <!-- Datos de Contacto -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-phone"
                                            style="color: #dc3545;"></i> Datos de Contacto</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="telefono" class="form-label"
                                                style="color: #000000;">Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono"
                                                value="<?php echo e(old('telefono')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="celular" class="form-label" style="color: #000000;">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular"
                                                value="<?php echo e(old('celular')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="email" class="form-label" style="color: #000000;">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="<?php echo e(old('email')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="direccion_residencia" class="form-label"
                                                style="color: #000000;">Dirección de Residencia <span
                                                    style="color: #dc3545;">*</span></label>
                                            <textarea
                                                class="form-control <?php $__errorArgs = ['direccion_residencia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="direccion_residencia" name="direccion_residencia" rows="2"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('direccion_residencia')); ?></textarea>
                                            <?php $__errorArgs = ['direccion_residencia'];
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
                                        <div class="col-md-3 mb-3">
                                            <label for="barrio" class="form-label" style="color: #000000;">Barrio</label>
                                            <input type="text" class="form-control" id="barrio" name="barrio"
                                                value="<?php echo e(old('barrio')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ciudad" class="form-label" style="color: #000000;">Ciudad <span
                                                    style="color: #dc3545;">*</span></label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['ciudad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="ciudad" name="ciudad" value="<?php echo e(old('ciudad')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['ciudad'];
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
                                            <label for="departamento" class="form-label"
                                                style="color: #000000;">Departamento <span
                                                    style="color: #dc3545;">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['departamento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="departamento" name="departamento" value="<?php echo e(old('departamento')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                            <?php $__errorArgs = ['departamento'];
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
                                            <label for="pais" class="form-label" style="color: #000000;">País <span
                                                    style="color: #dc3545;">*</span></label>
                                            <input type="text" class="form-control" id="pais" name="pais"
                                                value="<?php echo e(old('pais', 'Colombia')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Datos Familiares -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-group"
                                            style="color: #dc3545;"></i> Datos Familiares</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="nombre_conyuge" class="form-label" style="color: #000000;">Nombre
                                                del Cónyuge</label>
                                            <input type="text" class="form-control" id="nombre_conyuge"
                                                name="nombre_conyuge" value="<?php echo e(old('nombre_conyuge')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="numero_hijos" class="form-label" style="color: #000000;">Número de
                                                Hijos</label>
                                            <input type="number" class="form-control" id="numero_hijos" name="numero_hijos"
                                                value="<?php echo e(old('numero_hijos', 0)); ?>" min="0"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="personas_a_cargo" class="form-label"
                                                style="color: #000000;">Personas a Cargo</label>
                                            <input type="number" class="form-control" id="personas_a_cargo"
                                                name="personas_a_cargo" value="<?php echo e(old('personas_a_cargo', 0)); ?>" min="0"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="informacion_familiar" class="form-label"
                                                style="color: #000000;">Información Familiar Adicional</label>
                                            <textarea class="form-control" id="informacion_familiar"
                                                name="informacion_familiar" rows="3"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('informacion_familiar')); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Datos Laborales -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-briefcase"
                                            style="color: #dc3545;"></i> Datos Laborales</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="ocupacion" class="form-label"
                                                style="color: #000000;">Ocupación</label>
                                            <input type="text" class="form-control" id="ocupacion" name="ocupacion"
                                                value="<?php echo e(old('ocupacion')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="lugar_trabajo" class="form-label" style="color: #000000;">Lugar de
                                                Trabajo</label>
                                            <input type="text" class="form-control" id="lugar_trabajo" name="lugar_trabajo"
                                                value="<?php echo e(old('lugar_trabajo')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="cargo" class="form-label" style="color: #000000;">Cargo</label>
                                            <input type="text" class="form-control" id="cargo" name="cargo"
                                                value="<?php echo e(old('cargo')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="tipo_empleo" class="form-label" style="color: #000000;">Tipo de
                                                Empleo</label>
                                            <select class="form-control" id="tipo_empleo" name="tipo_empleo"
                                                style="border: 1px solid #808080; color: #000000;">
                                                <option value="">Seleccione...</option>
                                                <option value="empleado" <?php echo e(old('tipo_empleo') == 'empleado' ? 'selected' : ''); ?>>Empleado</option>
                                                <option value="independiente" <?php echo e(old('tipo_empleo') == 'independiente' ? 'selected' : ''); ?>>Independiente</option>
                                                <option value="desempleado" <?php echo e(old('tipo_empleo') == 'desempleado' ? 'selected' : ''); ?>>Desempleado</option>
                                                <option value="estudiante" <?php echo e(old('tipo_empleo') == 'estudiante' ? 'selected' : ''); ?>>Estudiante</option>
                                                <option value="jubilado" <?php echo e(old('tipo_empleo') == 'jubilado' ? 'selected' : ''); ?>>Jubilado</option>
                                                <option value="otro" <?php echo e(old('tipo_empleo') == 'otro' ? 'selected' : ''); ?>>Otro
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ingresos_mensuales" class="form-label"
                                                style="color: #000000;">Ingresos Mensuales</label>
                                            <input type="number" step="0.01" class="form-control" id="ingresos_mensuales"
                                                name="ingresos_mensuales" value="<?php echo e(old('ingresos_mensuales')); ?>" min="0"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="fecha_registro" class="form-label" style="color: #000000;">Fecha de
                                                Registro <span style="color: #dc3545;">*</span></label>
                                            <input type="date"
                                                class="form-control <?php $__errorArgs = ['fecha_registro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="fecha_registro" name="fecha_registro"
                                                value="<?php echo e(old('fecha_registro', date('Y-m-d'))); ?>"
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
                                        <div class="col-md-12 mb-3">
                                            <label for="descripcion_laboral" class="form-label"
                                                style="color: #000000;">Descripción Laboral</label>
                                            <textarea class="form-control" id="descripcion_laboral"
                                                name="descripcion_laboral" rows="2"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('descripcion_laboral')); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Datos Educativos -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-book"
                                            style="color: #dc3545;"></i> Datos Educativos</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="nivel_educativo" class="form-label" style="color: #000000;">Nivel
                                                Educativo</label>
                                            <select class="form-control" id="nivel_educativo" name="nivel_educativo"
                                                style="border: 1px solid #808080; color: #000000;">
                                                <option value="">Seleccione...</option>
                                                <option value="primaria" <?php echo e(old('nivel_educativo') == 'primaria' ? 'selected' : ''); ?>>Primaria</option>
                                                <option value="secundaria" <?php echo e(old('nivel_educativo') == 'secundaria' ? 'selected' : ''); ?>>Secundaria</option>
                                                <option value="tecnico" <?php echo e(old('nivel_educativo') == 'tecnico' ? 'selected' : ''); ?>>Técnico</option>
                                                <option value="universitario" <?php echo e(old('nivel_educativo') == 'universitario' ? 'selected' : ''); ?>>Universitario</option>
                                                <option value="postgrado" <?php echo e(old('nivel_educativo') == 'postgrado' ? 'selected' : ''); ?>>Postgrado</option>
                                                <option value="ninguno" <?php echo e(old('nivel_educativo') == 'ninguno' ? 'selected' : ''); ?>>Ninguno</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="institucion_educativa" class="form-label"
                                                style="color: #000000;">Institución Educativa</label>
                                            <input type="text" class="form-control" id="institucion_educativa"
                                                name="institucion_educativa" value="<?php echo e(old('institucion_educativa')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="titulo_obtenido" class="form-label" style="color: #000000;">Título
                                                Obtenido</label>
                                            <input type="text" class="form-control" id="titulo_obtenido"
                                                name="titulo_obtenido" value="<?php echo e(old('titulo_obtenido')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="estudiando_actualmente"
                                                    name="estudiando_actualmente" value="1" <?php echo e(old('estudiando_actualmente') ? 'checked' : ''); ?> style="border: 1px solid #808080;">
                                                <label class="form-check-label" for="estudiando_actualmente"
                                                    style="color: #000000;">
                                                    ¿Está estudiando actualmente?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Datos de Salud -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-plus-medical"
                                            style="color: #dc3545;"></i> Datos de Salud</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="tiene_seguro_salud"
                                                    name="tiene_seguro_salud" value="1" <?php echo e(old('tiene_seguro_salud') ? 'checked' : ''); ?> style="border: 1px solid #808080;">
                                                <label class="form-check-label" for="tiene_seguro_salud"
                                                    style="color: #000000;">
                                                    ¿Tiene seguro de salud?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="tipo_seguro_salud" class="form-label" style="color: #000000;">Tipo
                                                de Seguro de Salud</label>
                                            <input type="text" class="form-control" id="tipo_seguro_salud"
                                                name="tipo_seguro_salud" value="<?php echo e(old('tipo_seguro_salud')); ?>"
                                                style="border: 1px solid #808080; color: #000000;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="condiciones_medicas" class="form-label"
                                                style="color: #000000;">Condiciones Médicas</label>
                                            <textarea class="form-control" id="condiciones_medicas"
                                                name="condiciones_medicas" rows="2"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('condiciones_medicas')); ?></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="medicamentos_permanentes" class="form-label"
                                                style="color: #000000;">Medicamentos Permanentes</label>
                                            <textarea class="form-control" id="medicamentos_permanentes"
                                                name="medicamentos_permanentes" rows="2"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('medicamentos_permanentes')); ?></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="alergias" class="form-label"
                                                style="color: #000000;">Alergias</label>
                                            <textarea class="form-control" id="alergias" name="alergias" rows="2"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('alergias')); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Estado y Observaciones -->
                            <div class="card mb-3" style="background-color: #ffffff; border: 1px solid #808080;">
                                <div class="card-header"
                                    style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                                    <h5 style="color: #000000; margin: 0;"><i class="bx bx-info-circle"
                                            style="color: #dc3545;"></i> Estado y Observaciones</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="estado" class="form-label" style="color: #000000;">Estado <span
                                                    style="color: #dc3545;">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="estado"
                                                name="estado" style="border: 1px solid #808080; color: #000000;">
                                                <option value="activo" <?php echo e(old('estado', 'activo') == 'activo' ? 'selected' : ''); ?>>Activo</option>
                                                <option value="inactivo" <?php echo e(old('estado') == 'inactivo' ? 'selected' : ''); ?>>
                                                    Inactivo</option>
                                                <option value="suspendido" <?php echo e(old('estado') == 'suspendido' ? 'selected' : ''); ?>>Suspendido</option>
                                            </select>
                                            <?php $__errorArgs = ['estado'];
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
                                            <label for="observaciones" class="form-label"
                                                style="color: #000000;">Observaciones</label>
                                            <textarea class="form-control" id="observaciones" name="observaciones" rows="3"
                                                style="border: 1px solid #808080; color: #000000;"><?php echo e(old('observaciones')); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('admin.destinatarios.index')); ?>" class="btn"
                                    style="background-color: #808080; color: #ffffff; border: 1px solid #808080;">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn"
                                    style="background-color: #dc3545; color: #ffffff; border: none;">
                                    <i class="bx bx-save" style="color: #ffffff;"></i> Guardar Destinatario
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Practicas_Proyecto_Salesiano_III-TSDS\prueba\resources\views/admin/destinatarios/create.blade.php ENDPATH**/ ?>