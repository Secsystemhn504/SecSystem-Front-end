<?php $__env->startSection('title', 'Crear'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Clientes</h1>
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
                            <h3 class="card-title">Agregar Cliente</h3>
                        </div>
                        <form action = "<?php echo e(route('admin.clientes.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Codigo de Persona</label>
                                        <select class = "select2" name="cod_persona" id="post-cod_persona" required >
                                            <option selected disabled>Seleccione una persona</option>
                                            <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value = "<?php echo e($persona->cod_persona); ?>">
                                                <?php echo e($persona->cod_persona); ?>

                                                |
                                                <?php echo e($persona->primer_nom); ?>

                                                |
                                                <?php echo e($persona->primer_apel); ?>

                                                |
                                                <?php echo e($persona->rtn_persona); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Nombre Empresa</label>
                                        <input type="text" name="nom_empresa" value="<?php echo e(old('nom_empresa')); ?>" id="post-nom_empresa" class="col-sm-8 form-control input-lg" placeholder="Ingresar nombre de la empresa" minlength="5" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Correo Electrónico</label>
                                        <input type="email" name="correo_electronico" value="<?php echo e(old('correo_electronico')); ?>" id="post-correo_electronico" class="col-sm-8 form-control input-lg" placeholder="Ingresar correo electrónico" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Descripción de contrato</label>
                                        <input type="description" name="des_contrato" value="<?php echo e(old('des_contrato')); ?>" id="post-des_contrato" class="col-sm-8 form-control input-lg" placeholder="Ingresar descripcion del contrato" minlength="5" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Fecha inicio contrato</label>
                                        <input type="date" name="fec_ini_contrato" value="<?php echo e(old('fec_ini_contrato')); ?>" id="post-fec_ini_contrato" class="col-sm-8 form-control input-lg"
                                        data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="inputName" class="col-sm-4 col-form-label">Fecha fin contrato</label>
                                        <input type="date" name="fec_fin_contrato" value="<?php echo e(old('fec_fin_contrato')); ?>" id="post-fec_fin_contrato" class="col-sm-8 form-control  input-lg"
                                        data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('admin.clientes.index')); ?>" class="btn btn-danger">Salir</a>
                                <button type="submit" class="btn btn-warning toastrDefaultSuccess">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/select2/css/select2.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('.select2').select2({
                    theme: 'bootstrap4',
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
            toastr.success('Registro Creado Exitosamente.')
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






<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/admin/cliente/create.blade.php ENDPATH**/ ?>