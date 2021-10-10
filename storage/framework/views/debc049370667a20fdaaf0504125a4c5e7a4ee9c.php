<div>
    <div class="card card-warning card-outline">
        <div class="card-header">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.users.create')): ?>
                <a class="btn btn-warning " href="<?php echo e(route('admin.users.create')); ?>">Agregar Usuario</a>
            <?php endif; ?>
        </div>

        <?php if($users->count()): ?>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->Time_pass); ?></td>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.users.edit')): ?>
                                        <a class="btn btn-warning" href="<?php echo e(route('admin.users.edit', $user)); ?>">Editar</a>

                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.users.edit.password')): ?>
                                        <a class="btn btn-primary" href="<?php echo e(route('admin.password.edit', $user)); ?>">Cambiar Contraseña</a>
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="card-footer">
                <?php echo e($users->links()); ?>

            </div>
        <?php else: ?>

            <div class="card-body">
                <strong>No hay registros</strong>
            </div>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\proyecto\resources\views/livewire/admin/users-index.blade.php ENDPATH**/ ?>