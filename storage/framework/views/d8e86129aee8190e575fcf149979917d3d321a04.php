<?php $__env->startSection('title', 'Personas'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Personas</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!CONTENIDO************>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Tabla Personas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group row">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.personas.create')): ?>
                                    <div class="col-sm-12">
                                        <a type="button" class="btn btn-warning" href="<?php echo e(route('admin.personas.create')); ?>"><i class="fa fa-pen"></i> Agregar</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" width="10px">Cod Persona</th>
                                        <th scope="col">Primer Nombre</th>
                                        <th scope="col">Segundo Nombre</th>
                                        <th scope="col">Primer Apellido</th>
                                        <th scope="col">Sexo</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Tipo Persona</th>
                                        <th scope="col">Fecha nacimiento</th>
                                        <th scope="col">RTN</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Municipio</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Numero Telefono</th>
                                        <th scope="col">Tipo Telefono</th>
                                        <th scope="col">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($persona->cod_persona); ?></th>
                                        <td><?php echo e($persona->primer_nom); ?></td>
                                        <td><?php echo e($persona->segundo_nom); ?></td>
                                        <td><?php echo e($persona->primer_apel); ?></td>
                                        <td><?php echo e($persona->sexo); ?></td>
                                        <td><?php echo e($persona->edad); ?></td>
                                        <td><?php echo e($persona->tipo_persona); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($persona->fec_nac_persona)->formatLocalized('%d de %B del %Y')); ?></td>
                                        <td><?php echo e($persona->rtn_persona); ?></td>
                                        <td><?php echo e($persona->des_direc); ?></td>
                                        <td><?php echo e($persona->municipio); ?></td>
                                        <td><?php echo e($persona->departamento); ?></td>
                                        <td><?php echo e($persona->num_tel); ?></td>
                                        <td><?php echo e($persona->tipo_tel); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.personas.edit')): ?>
                                                    <a href="<?php echo e(route('admin.personas.edit', $persona->cod_persona)); ?>" class="btn btn-warning btnEditarPersona"><i class="fas fa-pencil-alt"></i></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.personas.show')): ?>
                                                    <a href="<?php echo e(route('admin.personas.show', $persona->cod_persona)); ?>" class="btn btn-primary btnVerPersona"><i class="fas fa-eye"></i></a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col" width="10px">Cod Persona</th>
                                        <th scope="col">Primer Nombre</th>
                                        <th scope="col">Segundo Nombre</th>
                                        <th scope="col">Primer Apellido</th>
                                        <th scope="col">Sexo</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Tipo Persona</th>
                                        <th scope="col">Fecha nacimiento</th>
                                        <th scope="col">RTN</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Municipio</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Numero Telefono</th>
                                        <th scope="col">Tipo Telefono</th>
                                        <th scope="col">Accion</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
<!-- /.content -->
<!TERMINA CONTENIDO************>
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
    <!-- Page specific script -->
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        });
    </script>

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
    <!-- Select2 -->
    <script src="<?php echo e(asset('vendor/select2/js/select2.full.min.js')); ?>"></script>
    <!-- InputMask -->
    <script src="<?php echo e(asset('vendor/moment/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/inputmask/jquery.inputmask.min.js')); ?>"></script>
    <!-- date-range-picker -->
    <script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo e(asset('vendor/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
    <!-- dropzonejs -->
    <script src="<?php echo e(asset('vendor/dropzone/min/dropzone.min.js')); ?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo e(asset('vendor/sweetalert2/sweetalert2.min.js')); ?>"></script>
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

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

        })
    </script>

    <script>
        $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultInfo').click(function() {
            Toast.fire({
            icon: 'info',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultError').click(function() {
            Toast.fire({
            icon: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultWarning').click(function() {
            Toast.fire({
            icon: 'warning',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultQuestion').click(function() {
            Toast.fire({
            icon: 'question',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });

        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultTopLeft').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'topLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomRight').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomRight',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomLeft').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultAutohide').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            autohide: true,
            delay: 750,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultNotFixed').click(function() {
            $(document).Toasts('create', {
            title: 'Toast Title',
            fixed: false,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultFull').click(function() {
            $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            icon: 'fas fa-envelope fa-lg',
            })
        });
        $('.toastsDefaultFullImage').click(function() {
            $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            image: '../../dist/img/user3-128x128.jpg',
            imageAlt: 'User Picture',
            })
        });
        $('.toastsDefaultSuccess').click(function() {
            $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
            class: 'bg-info',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultWarning').click(function() {
            $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultMaroon').click(function() {
            $(document).Toasts('create', {
            class: 'bg-maroon',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        });
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/admin/persona/index.blade.php ENDPATH**/ ?>