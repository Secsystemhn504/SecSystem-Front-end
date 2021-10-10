<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de Usuarios</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users-index')->html();
} elseif ($_instance->childHasBeenRendered('78ljOr3')) {
    $componentId = $_instance->getRenderedChildComponentId('78ljOr3');
    $componentTag = $_instance->getRenderedChildComponentTagName('78ljOr3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('78ljOr3');
} else {
    $response = \Livewire\Livewire::mount('admin.users-index');
    $html = $response->html();
    $_instance->logRenderedChild('78ljOr3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
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



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/admin/users/index.blade.php ENDPATH**/ ?>