<?php $__env->startSection('title', 'Roles'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de roles</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.create')): ?>
                                <a class="btn btn-warning " href="<?php echo e(route('admin.roles.create')); ?>">Agregar Rol</a>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <th colspan="2">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($role->id); ?></td>
                                            <td><?php echo e($role->name); ?></td>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.edit')): ?>
                                                    <a href="<?php echo e(route('admin.roles.edit', $role)); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>Editar</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.destroy')): ?>
                                                    <form action="<?php echo e(route('admin.roles.destroy', $role)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <th colspan="2">Accion</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/select2/css/select2.min.css')); ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/toastr/toastr.min.css')); ?>">


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/pdfmake/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

    <!-- Bootstrap Switch -->
    <script src="<?php echo e(asset('vendor/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
    <!-- dropzonejs -->
    <script src="<?php echo e(asset('vendor/dropzone/min/dropzone.min.js')); ?>"></script>
    <!-- Toastr -->
    <script src="<?php echo e(asset('vendor/toastr/toastr.min.js')); ?>"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>